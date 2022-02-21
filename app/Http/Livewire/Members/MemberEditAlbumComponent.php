<?php

namespace App\Http\Livewire\Members;

use App\Models\Albums;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class MemberEditAlbumComponent extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $newimage;
    public $album_id;
    public $published_at;


    public function mount($album_id){
        $this->album_id = $album_id;
        $album = Albums::where('id', $this->album_id)->first();
        $this->image = $album->image;
        $this->name = $album->name;
        $this->published_at = $album->published_at;
    }

    public function updateAlbum(){
        $album = Albums::find($this->album_id);

        if($this->newimage){
            unlink("images/albums"."/".$album->image);

            $imagename = $this->newimage; 
            $filename = Carbon::now()->timestamp.'.'.$imagename->extension();
            $imagename->storeAs('images/albums', $filename);
            $album->image = $this->newimage;
            $album->slug = asset('images/albums').'/'.$filename;
        }

        $album->name = $this->name;
        $album->published_at = $this->published_at;
        $album->save();
        session()->flash('message', 'Album has been updated successfully.');
    }

    public function render()
    {
        return view('livewire.members.member-edit-album-component')->layout('layouts.member');
    }
}
