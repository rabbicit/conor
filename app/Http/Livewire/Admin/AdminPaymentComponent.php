<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payments;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPaymentComponent extends Component
{
    use WithPagination;

    public $deleteid = '';

    public function DeleteID($id){
        $this->deleteid = $id;
    }
    public function deletePayment(){
        $payment = Payments::find($this->deleteid);
        $payment->delete();
        session()->flash('message', 'Payment Item has been deleted successfully!');
    }

    public function render()
    {
        $payments = Payments::orderBy('date', 'desc')->paginate(20);
        return view('livewire.admin.admin-payment-component',  ['payments' => $payments])->layout('layouts.dashboard');
    }
}
