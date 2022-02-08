<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactPageComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment; 

    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);
    }
    public function sendMessage(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'Thanks, your message has been sent successfully.');
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->comment = '';
    }
    public function render()
    {
        return view('livewire.contact-page-component')->layout('layouts.base');
    }
}
