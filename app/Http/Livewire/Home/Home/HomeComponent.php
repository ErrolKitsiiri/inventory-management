<?php

namespace App\Http\Livewire\Home\Home;

use Livewire\Component;

class HomeComponent extends Component
{
    public $name, $email, $subject, $message;

    //Email sending function
    public function send(){

    }

    public function render()
    {
        return view('livewire.home.home.home-component')->layout('layouts.home');
    }
}
