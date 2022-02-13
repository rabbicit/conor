<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;

class MemberTracksComponent extends Component
{
    public function render()
    {
        return view('livewire.members.member-tracks-component')->layout('layouts.member');
    }
}
