<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use App\Models\Product;
use Livewire\Component;

class HomepageComponent extends Component
{
    public function render()
    {
        $plans = Plan::all();
        return view('livewire.homepage-component', ['plans' => $plans])->layout('layouts.base');
    }
}
