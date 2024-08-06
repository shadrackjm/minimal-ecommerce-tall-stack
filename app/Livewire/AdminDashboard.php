<?php

namespace App\Livewire;

use Livewire\Component;



class AdminDashboard extends Component
{
    public $currentUrl;
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/',$current_url);
        
        $this->currentUrl = $explode_url[3].' '.$explode_url[4];

        return view('livewire.admin-dashboard')
        ->layout('admin-layout');
    }
}
