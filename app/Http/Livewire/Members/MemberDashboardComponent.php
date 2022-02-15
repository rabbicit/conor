<?php

namespace App\Http\Livewire\Members;

use App\Models\Albums;
use App\Models\Tracks;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MemberDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $albums = Albums::where('user_id', Auth::user()->id)->first();
        if(!$albums){
            $albums = new Albums();
            $albums->user_id = Auth::user()->id;
            $albums->save();
        }

        $user = Auth::user();

        $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));
        if($user->stripe_id){
            $dataActive = $stripe->subscriptions->all(['customer' => $user->stripe_id]);
        }else{
            $dataActive = [];
        }
        
        
        $tracks = Tracks::where('user_id', Auth::user()->id)->paginate(30);
        return view('livewire.members.member-dashboard-component', ['tracks' => $tracks, 'albums' => $albums, 'dataActive' => $dataActive])->layout('layouts.member');
    }
}
