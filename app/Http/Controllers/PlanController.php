<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Tracks;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlanController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    /**
     * Show the Plan.
     *
     * @return mixed
     */
    public function show(Plan $plan, Request $request)
    {   
        $paymentMethods = $request->user()->paymentMethods();

        $intent = $request->user()->createSetupIntent();
        
        return view('plans.show', compact('plan', 'intent'));
    }

    public function showPlans()
    {           
        $plans = Plan::all();
        return view('plans.plans', compact('plans'));
    }

    public function downloadTracks($id){

        $track = Tracks::where('id', $id)->firstOrFail();
        $pathToFile = public_path('music/' . $track->file_name);
        return response()->download($pathToFile);
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
        
        return redirect()->route('index')->with('success', 'Your plan subscribed successfully');
    }


    public function createPlan()
    {
        return view('plans.create');
    }

    public function storePlan(Request $request)
    {   
        $data = $request->except('_token');

        $data['slug'] = Str::slug($data['name']);
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
