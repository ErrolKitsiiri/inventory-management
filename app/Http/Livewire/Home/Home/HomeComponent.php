<?php

namespace App\Http\Livewire\Home\Home;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home.home.home-component')->layout('layouts.home');
    }
}
