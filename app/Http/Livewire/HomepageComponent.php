<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomepageComponent extends Component
{
    public function render()
    {
        $products = Product::take(10)->get(); 
        return view('livewire.homepage-component', ['products' => $products])->layout('layouts.base');
    }
}
