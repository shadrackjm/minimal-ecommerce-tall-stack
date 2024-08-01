<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class SearchComponent extends Component
{
    public function render()
    {
        return view('livewire.search-component',[
            'categories' => Category::all()
        ]);
    }
}
