<?php

namespace App\Http\Livewire\User\Home;

use Livewire\Component;

class ViewHomePageComponent extends Component
{
    public function render()
    {
        return view('livewire.user.home.view-home-page-component')->layout('layouts.home');
        //return view('livewire.client.home.account-component')->layout('layouts.client-home');
    }
}
