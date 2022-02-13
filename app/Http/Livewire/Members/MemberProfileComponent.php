<?php

namespace App\Http\Livewire\Members;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class MemberProfileComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $state;
    public $country;
    public $zip;
    public $current_password;
    public $password;
    public $password_confirmation;

    public function mount(){
        $user = User::find(Auth::user()->id);
        $this->email = $user->email;
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->city = $user->city;
        $this->state = $user->state;
        $this->zip = $user->zip;
        $this->country = $user->country;
    }

    public function SaveProfile(){

        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->phone = $this->phone;
        $user->address = $this->address;
        $user->city = $this->city;
        $user->state = $this->state;
        $user->country = $this->country;
        $user->zip = $this->zip;
        $user->save();
        session()->flash('message', 'Profile has been updated successfully.');
    }


    public function update($fields){
        $this->validateOnly($fields,[
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ]);
    }

    public function changePassword(){
        $this->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ]);

        if(Hash::check($this->current_password, Auth::user()->password)){
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('password_succ', 'Password has been changed successfully!');
        }else{
            session()->flash('password_error', 'Password does not match!');
        }
    }

    public function render()
    {
        return view('livewire.members.member-profile-component')->layout('layouts.member');
    }
}
