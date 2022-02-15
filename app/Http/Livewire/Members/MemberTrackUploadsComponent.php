<?php

namespace App\Http\Livewire\Members;

use App\Models\Tracks;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class MemberTrackUploadsComponent extends Component
{
    use WithFileUploads;

    public $tracks = [];

    public function storeTracks(){
        $user = User::find(Auth::user()->id);
        $max = $user->max_upload;
        $this->validate([
            'tracks.*' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav|max:102400',
            'tracks' => 'max:'.$max
        ]);
        
        foreach($this->tracks as $key => $track){
            $filename = Carbon::now()->timestamp.$key.'.'.$track->extension();
            $tracks = new Tracks();
            $track->storeAs('music', $filename);
            $tracks->file_name = $filename;
            $tracks->user_id = Auth::user()->id;
            $tracks->url = asset('music').'/'.$filename;
            $tracks->save();
        }

        session()->flash('message', 'Tracks has been uploaded successfully. Udate Track details now.');
        return redirect()->route('member.save');
    }


    public function update($fields){
        $user = User::find(Auth::user()->id);
        $max = $user->max_upload;
        $this->validateOnly($fields,[
            'tracks.*' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav|max:102400',
            'tracks' => 'max:'.$max
        ]);
    }

    public function messages() {
        $user = User::find(Auth::user()->id);
        $max = $user->max_upload;
        return [
            'tracks.*.max' => 'File size should be less than 5mb',
            'tracks.*.mimes' => 'Only audio files are allowed.',
            'tracks.max' => 'Only '.$max.' Files are allowed'
        ];
    }


    public function removeFile($index){
        array_splice($this->tracks, $index);
    }

    public function render()
    {
        return view('livewire.members.member-track-uploads-component')->layout('layouts.member');
    }
}
