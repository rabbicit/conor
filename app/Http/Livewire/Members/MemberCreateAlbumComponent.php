<?php

namespace App\Http\Livewire\Members;

use App\Models\Albums;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class MemberCreateAlbumComponent extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $slug;
    public $published_at;

    public function storeAlbum(){
        $this->validate([
            'image' => 'image|max:7024',
            'name' => 'required|min:6',
        ]);     
        
        $imagename = $this->image; 

        $filename = Carbon::now()->timestamp.'.'.$imagename->extension();

        $albums = new Albums();
        $imagename->storeAs('images/albums', $filename);
        $albums->name = $this->name;
        $albums->user_id = Auth::user()->id;
        $albums->slug = asset('images/albums').'/'.$filename;
        $albums->image = $filename;
        $albums->published_at = $this->published_at;
        $albums->save();
        session()->flash('message', 'Album has been created successfully.');

    }


    public function render()
    {
        return view('livewire.members.member-create-album-component')->layout('layouts.member');
    }
}
