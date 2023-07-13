<?php

namespace App\Http\Livewire\Admin\Vendor;

use App\Models\Vendor;
use Livewire\Component;

class CreateComponent extends Component
{
    public Vendor $vendor;

    protected $rules = [
        'vendor.name' => 'required|min:5',
        'vendor.phone_number' => 'required',
        'vendor.email' => 'required|email',
        'vendor.address' => 'required',
        // 'email' => 'required|string|email|max:255|unique:users,email'
    ];

    public function mount(){
        $this->vendor = new Vendor();
    }

    public function save(){
        $this->validate();
        $this->vendor->save();

        $this->resetInput();
        $this->dispatchBrowserEvent('success', [
            'title'=>'Success',
            'icon'=>'success',
            'text'=>'New Vendor Registered Successfully'
        ]);
    }

    public function resetInput(){
        $this->vendor = new Vendor();
    }

    public function render()
    {
        return view('livewire.admin.vendor.create-component')->layout('layouts.admin');
    }
}
