<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;
use Livewire\WithFileUploads;

class MemberTrackUploadsComponent extends Component
{
    use WithFileUploads;

    public $tracks = [];

    public function storeTracks(){

    }

    public function render()
    {
        return view('livewire.members.member-track-uploads-component')->layout('layouts.member');
    }
}
