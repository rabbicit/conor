<?php

namespace App\Http\Livewire\Members;

use App\Models\Plan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MemberSubscriptionComponent extends Component
{

    

    public function render()
    {
        $plans = Plan::all();

        $user = Auth::user();

        $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));
        if($user->stripe_id){
            $dataActive = $stripe->subscriptions->all(['customer' => $user->stripe_id]);
        }else{
            $dataActive = [];
        }
        // var_dump($dataActive);

        return view('livewire.members.member-subscription-component', ['dataActive' => $dataActive, 'plans' => $plans])->layout('layouts.member');
    }
}
