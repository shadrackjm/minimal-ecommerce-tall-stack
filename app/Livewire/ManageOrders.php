<?php

namespace App\Livewire;

use Livewire\Component;

class ManageOrders extends Component
{
    public function render()
    {
        return view('livewire.manage-orders')->layout('admin-layout');
    }
}
