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
    public $name, $songwriters, $explicit_content, $producer, $featured_artist, $instrumental, $album_id, $price, $track_id, $track_version, $contain_lyrics, $isrc_number, $track_created, $isrc_numbers = [];
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
            $this->album_id[$i] = $track->album_id;
            $this->price[$i] = $track->price;
            $this->track_version[$i] = $track->track_version;
            $this->contain_lyrics[$i] = $track->contain_lyrics;
            $this->isrc_number[$i] = $track->isrc_number;
            $this->isrc_numbers[$i] = $track->isrc_number;
            $this->track_created[$i] = $track->track_created;
            $i++;
        }


    }

    public function copyDetails($current){
        $tracks = Tracks::where('user_id', Auth::user()->id)->paginate(30);
        $i = 0;
        foreach($tracks as $track){
            $this->songwriters[$i] = $this->songwriters[$current];
            $this->explicit_content[$i] = $this->explicit_content[$current];
            $this->producer[$i] = $this->producer[$current];
            $this->featured_artist[$i] = $this->featured_artist[$current];
            $this->instrumental[$i] = $this->instrumental[$current];
            $this->album_id[$i] = $this->album_id[$current];
            $this->price[$i] = $this->price[$current];
            $this->track_version[$i] = $this->track_version[$current];
            $this->contain_lyrics[$i] = $this->contain_lyrics[$current];
            $this->isrc_number[$i] = $this->isrc_number[$current];
            $this->isrc_numbers[$i] = $this->isrc_number[$current];
            $this->track_created[$i] = $this->track_created[$current];
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
        $tracks->album_id = $this->album_id[$i];
        $tracks->track_version = $this->track_version[$i];
        $tracks->contain_lyrics = $this->contain_lyrics[$i];
        $tracks->isrc_number = $this->isrc_number[$i];
        if($this->isrc_numbers[$i] != ''){
            $tracks->isrc_number = $this->isrc_numbers[$i];
        }
        
        $tracks->track_created = $this->track_created[$i];
        $tracks->save();
        session()->flash('message'.$i, 'Track has been updated successfully.');
    }

    public function removeFile($id){
        $tracks = Tracks::find($id);

        $tracks->delete();
        session()->flash('delete', 'Track has been deleted successfully!');
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
        $albums = Albums::where('user_id', Auth::user()->id)->get();
        return view('livewire.members.save-track-details-component', ['tracks' => $tracks, 'albums' => $albums])->layout('layouts.member');
    }
}
