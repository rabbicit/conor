<?php

namespace App\Http\Livewire\Members;

use App\Models\Albums;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MemberCalendarComponent extends Component
{
    public function render()
    {
        $albums = Albums::where('user_id', Auth::user()->id)->get();
        return view('livewire.members.member-calendar-component', ['albums' => $albums])->layout('layouts.member');
    }
}
