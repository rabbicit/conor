<?php

namespace App\Http\Livewire\Members;

use App\Models\Payments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MemberPaymentComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $payments = Payments::where('user_id', Auth::user()->id)->orderBy('date', 'desc')->paginate(10);
        return view('livewire.members.member-payment-component', ['payments' => $payments])->layout('layouts.member');
    }
}
