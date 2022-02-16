<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tracks;
use Livewire\Component;
use Livewire\WithPagination;

class AdminMusicsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $tracks = Tracks::paginate(20);
        return view('livewire.admin.admin-musics-component', ['tracks' => $tracks])->layout('layouts.dashboard');
    }
}
 