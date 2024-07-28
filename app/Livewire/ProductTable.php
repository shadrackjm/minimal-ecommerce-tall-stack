<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{

    use WithPagination;

    public $perPage = 5;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    public $search = '';

    public function setSortBy($sortColum){
        if ($this->sortBy == $sortColum) {
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        
        $this->sortBy = $sortColum;
        $this->sortDir = 'ASC';
    }
    public function render()
    {
        return view('livewire.product-table',[
            'products' => Product::with('category')->search($this->search)
            ->orderBy($this->sortBy,$this->sortDir)
            ->paginate($this->perPage)
        ]);
    }
}
