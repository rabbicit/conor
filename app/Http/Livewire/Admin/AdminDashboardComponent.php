<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tracks;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render() 
    {
        $tracks = Tracks::paginate(15);
        return view('livewire.admin.admin-dashboard-component', ['tracks' => $tracks])->layout('layouts.dashboard');
    }
}
