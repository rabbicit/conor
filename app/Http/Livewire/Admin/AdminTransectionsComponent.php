<?php

namespace App\Http\Livewire\Admin;

use Laravel\Cashier\Subscription;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTransectionsComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $subscriptions = Subscription::query()->active()->paginate(20);
        return view('livewire.admin.admin-transections-component', ['subscriptions' => $subscriptions])->layout('layouts.dashboard');
    }
}
