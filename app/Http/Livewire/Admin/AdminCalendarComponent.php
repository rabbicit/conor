<?php

namespace App\Http\Livewire\Admin;

use App\Models\Albums;
use Livewire\Component;

class AdminCalendarComponent extends Component
{
    public function render()
    {
        $albums = Albums::all();
        return view('livewire.admin.admin-calendar-component', ['albums' => $albums])->layout('layouts.dashboard');
    }
}
