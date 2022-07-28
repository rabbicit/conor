<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class subscriptionController extends Controller
{
    protected $stripe;

    public function __construct(){
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    }

    public function create(Request $request, Plan $plan){
        $plan = Plan::findOrFail($request->get('plan'));
        
        $user = $request->user();
        $paymentMethod = $request->paymentMethod;

        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($paymentMethod);
        $user->newSubscription('default', $plan->stripe_plan)
        ->create($paymentMethod, [
            'email' => $user->email,
        ]);

        $userdata = User::find(Auth::user()->id);
        $userdata->max_upload = $plan->max_upload;
        $userdata->save();
        
        return redirect()->route('member.dashboard')->with('success', 'Your plan subscribed successfully');
    }

    public function update(Request $request, Plan $plan){

        $user = $request->user();
        $plan = Plan::where('stripe_plan', $request->get('package'))->first();
        $subscriptions = $user->subscriptions()->active()->first();

        $subscription = $this->stripe->subscriptions->retrieve($subscriptions->stripe_id);
        // Change Plan
        $charge = $this->stripe->subscriptions->update($subscriptions->stripe_id, [
            'cancel_at_period_end' => false,
            'proration_behavior' => 'create_prorations',
            'billing_cycle_anchor' => 'unchanged',
            'items' => [
                [
                    'id' => $subscription->items->data[0]->id,
                    'price' => $plan->stripe_plan,
                ],
            ],
        ]);

        $userdata = User::find(Auth::user()->id);
        $userdata->max_upload = $plan->max_upload;
        $userdata->save();

        return redirect()->route('member.subscription')->with('success', 'Your subscription updated successfully');
    }

    public function cancel(Request $request){

        $user = $request->user();
        $subscriptions = $user->subscriptions()->active()->first();
        $subscription = $this->stripe->subscriptions->retrieve($subscriptions->stripe_id);
        $subscription->active();

        $userdata = User::find(Auth::user()->id);
        $userdata->max_upload = 0;
        $userdata->save();

        return redirect()->route('member.subscription')->with('success', 'Your subscription cancelled successfully');
    }


    public function createPlan()
    {
        return view('plans.create');
    }

    public function storePlan(Request $request)
    {   
        $data = $request->except('_token');

        $data['slug'] = strtolower($data['name']);
        $price = $data['cost'] *100; 

        //create stripe product
        $stripeProduct = $this->stripe->products->create([
            'name' => $data['name'],
        ]);
        
        //Stripe Plan Creation
        $stripePlanCreation = $this->stripe->plans->create([
            'amount' => $price,
            'currency' => 'USD',
            'interval' => 'year', //  it can be day,week,month or year
            'product' => $stripeProduct->id,
        ]);

        $data['stripe_plan'] = $stripePlanCreation->id;

        Plan::create($data);

        echo 'plan has been created';
    } 

}
