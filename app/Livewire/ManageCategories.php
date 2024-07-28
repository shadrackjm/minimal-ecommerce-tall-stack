<?php

namespace App\Livewire;

use Livewire\Component;

class ManageCategories extends Component
{
    public function render()
    {
        return view('livewire.manage-categories')->layout('admin-layout');
    }
}
