<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payments;
use App\Models\User;
use Livewire\Component;

class AdminCreatePaymentComponent extends Component
{

    public $user_id;
    public $date;
    public $description;
    public $debit;
    public $credit;
    public $balance;
    public $currency;

    public function storePayment(){
        $this->validate([
            'user_id' => 'required',
            'date' => 'required',
            'debit' => 'required',
            'credit' => 'required',
        ]);

        $payment = new Payments();

        $payment->user_id = $this->user_id;
        $payment->date = $this->date;
        $payment->description = $this->description;
        $payment->debit = $this->debit;
        $payment->credit = $this->credit;
        $payment->balance = $this->balance;
        $payment->currency = $this->currency;
        $payment->save();
        return redirect('admin/payments')->with('message', 'Payment has been created successfully.');
    }

    public function render()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('livewire.admin.admin-create-payment-component', [ 'users' => $users])->layout('layouts.dashboard');
    }
}
