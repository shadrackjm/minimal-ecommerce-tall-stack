<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AddCategory extends Component
{
    public $currentUrl;
    public $category_name = '';

    public function save(){
        $this->validate([
            'category_name' => 'required'
        ]);

        $category = new Category();
        $category->name = $this->category_name;
        $category->save();

        return $this->redirect('/manage/categories', navigate: true);
    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/',$current_url);
        
        $this->currentUrl = $explode_url[3].' '.$explode_url[4];
        return view('livewire.add-category')->layout('admin-layout');
    }
}
