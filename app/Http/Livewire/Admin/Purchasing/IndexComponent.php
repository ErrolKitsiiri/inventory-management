<?php

namespace App\Http\Livewire\Admin\Purchasing;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.purchasing.index-component',['products'=> Product::orderBy('created_at', 'desc')->paginate(10)])->layout('layouts.admin');
    }
}
