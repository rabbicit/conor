<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;

class MemberDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.members.member-dashboard-component')->layout('layouts.member');
    }
}
