<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddProductForm extends Component
{
    use WithFileUploads;
    public $currentUrl;
    public $upload;
    public $photo;
    public $progress;

    public function save(){

    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/',$current_url);
        
        $this->currentUrl = $explode_url[3].' '.$explode_url[4];

        return view('livewire.add-product-form')
        ->layout('admin-layout');
    }
}
