<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminMembershipComponent extends Component
{
    use WithPagination; 

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        session()->flash('message', 'User has been deleted successfully');

    }

    public function render()
    {
        $users = User::paginate(15);
        return view('livewire.admin.admin-membership-component', ['users' => $users])->layout('layouts.dashboard');
    }
}
