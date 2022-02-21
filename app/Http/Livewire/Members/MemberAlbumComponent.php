<?php

namespace App\Http\Livewire\Members;

use App\Models\Albums;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MemberAlbumComponent extends Component
{
    

    public function deleteAlbums($id){
        $albums = Albums::find($id);
        if($albums->image){
            unlink("images/albums". "/" . $albums->image);
        }

        $albums->delete();
        session()->flash('message', 'Album has been deleted successfully!');
    }

    public function render()
    {
        $albums = Albums::where('user_id', Auth::user()->id)->get();
        // dd($albums);
        return view('livewire.members.member-album-component', ['albums' => $albums])->layout('layouts.member');
    }
}
