<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payments;
use App\Models\User;
use Livewire\Component;

class AdminEditPaymentComponent extends Component
{
    
    public $payment_id;
    public $user_id;
    public $date;
    public $description;
    public $debit;
    public $credit;
    public $balance;
    public $currency;

    public function mount($payment_id){
        $this->payment_id = $payment_id;
        $payment = Payments::where('id', $payment_id)->first();
        
        $this->user_id = $payment->user_id;
        $this->date = $payment->date;
        $this->description = $payment->description;
        $this->debit = $payment->debit;
        $this->credit = $payment->credit;
        $this->balance = $payment->balance;
        $this->currency = $payment->currency;
    }

    public function editPayment(){
        $this->validate([
            'user_id' => 'required',
            'date' => 'required',
            'debit' => 'required',
            'credit' => 'required',
        ]);

        $payment = Payments::find($this->payment_id);

        $payment->user_id = $this->user_id;
        $payment->date = $this->date;
        $payment->description = $this->description;
        $payment->debit = $this->debit;
        $payment->credit = $this->credit;
        $payment->balance = $this->balance;
        $payment->currency = $this->currency;
        $payment->save();
        return redirect('admin/payments')->with('message', 'Payment has been updated successfully.');
    }


    public function render()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('livewire.admin.admin-edit-payment-component', [ 'users' => $users])->layout('layouts.dashboard');
    }
}
