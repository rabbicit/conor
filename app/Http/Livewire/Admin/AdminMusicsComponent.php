<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminMusicsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-musics-component')->layout('layouts.dashboard');
    }
}
