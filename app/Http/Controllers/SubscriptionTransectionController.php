<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Subscription;

// cus_Lw7rxqadRfh8gi
class SubscriptionTransectionController extends Controller
{
    
    protected $stripe;

    public function __construct(){
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    }

    public function list_transections(Request $request){
        $user = $request->user();
        $activity = $this->stripe->subscriptions->retrieve( 'sub_1LQbBzGnA1SixAaq16XQsZGb');

 

        $sbdetails = $user->subscriptions()->active()->first();

        if(!empty($sbdetails)){
            $invoices = $this->stripe->invoices->all(
                ['limit' => 3, 'subscription' => $sbdetails->stripe_id]
            );
        }else{
            $invoices = [];
        }

        return view('livewire.members.history', ['invoices' => $invoices]);
    }
}
