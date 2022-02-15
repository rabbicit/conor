<?php

namespace App\Http\Livewire\Members;

use App\Models\Albums;
use App\Models\Tracks;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SaveTrackDetailsComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $albimage;

    public $albname, $newimage;
    public $name, $songwriters, $explicit_content, $producer, $featured_artist, $instrumental, $price, $track_id = [];
    public $usertracks = [];

    public function mount(){
        $albums = Albums::where('user_id', Auth::user()->id)->first();
        $this->albname = $albums->name;
        $this->albimage = $albums->image;
        $tracks = Tracks::where('user_id', Auth::user()->id)->paginate(30);
        $i = 0;
        foreach($tracks as $track){
            $this->track_id[$i] = $track->id;
            $this->name[$i] = $track->name;
            $this->songwriters[$i] = $track->songwriters;
            $this->explicit_content[$i] = $track->explicit_content;
            $this->producer[$i] = $track->producer;
            $this->featured_artist[$i] = $track->featured_artist;
            $this->instrumental[$i] = $track->instrumental;
            $this->price[$i] = $track->price;
            $i++;
        }


    }

    public function storeTracks($i){
        $tracks = Tracks::where('id', $this->track_id[$i])->first();
        $tracks->name = $this->name[$i];
        $tracks->songwriters = $this->songwriters[$i];
        $tracks->explicit_content = $this->explicit_content[$i];
        $tracks->price = $this->price[$i];
        $tracks->producer = $this->producer[$i];
        $tracks->featured_artist = $this->featured_artist[$i];
        $tracks->instrumental = $this->instrumental[$i];
        $tracks->save();
        session()->flash('message'.$i, 'Track has been updated successfully.');
    }


    public function removeFile($id){
        $tracks = Tracks::find($id);

        $tracks->delete();
        session()->flash('delete', 'Track has been deleted successfully!');
    }


    public function storeAlbum(){
        $this->validate([
            'newimage' => 'image|max:7024',
            'albname' => 'required|min:6',
        ]);     
        
        $imagename = $this->newimage; 

        $filename = Carbon::now()->timestamp.'.'.$imagename->extension();
        $albums = Albums::where('user_id', Auth::user()->id)->first();

        if(!$albums){
            $albums = new Albums();
        }
        $imagename->storeAs('images/albums', $filename);

        $albums->name = $this->albname;
        $albums->user_id = Auth::user()->id;
        $albums->slug = asset('images/albums').'/'.$filename;
        $albums->image = $filename;
        $albums->save();
        session()->flash('message', 'Album has been uploaded successfully. Udate Track details now.');

    }

    public function updated($propertyName){
        $this->validateOnly($propertyName, [
            'newimage' => 'image|max:7024',
            'albname' => 'required|min:6',
        ]);
    }


    public function render()
    {
        $tracks = Tracks::where('user_id', Auth::user()->id)->paginate(30);
        return view('livewire.members.save-track-details-component', ['tracks' => $tracks])->layout('layouts.member');
    }
}
