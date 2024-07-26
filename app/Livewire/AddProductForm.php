<?php

namespace App\Livewire;

use Livewire\Component;

class AddProductForm extends Component
{
    public function render()
    {
        return view('livewire.add-product-form')
        ->layout('admin-layout');
    }
}
