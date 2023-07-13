<?php

namespace App\Http\Livewire\Admin\Purchasing;

use Livewire\Component;

class CreateComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.purchasing.create-component')->layout('layouts.admin');
    }
}
