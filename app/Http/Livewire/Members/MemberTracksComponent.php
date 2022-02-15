<?php

namespace App\Http\Livewire\Members;

use App\Models\Tracks;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MemberTracksComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $tracks = Tracks::where('user_id', Auth::user()->id)->paginate(30);
        return view('livewire.members.member-tracks-component', ['tracks' => $tracks])->layout('layouts.member');
    }
}
