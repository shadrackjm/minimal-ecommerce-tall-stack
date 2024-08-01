<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product;
    public function mount($product_id){
        $this->product = Product::find($product_id);
    }
    public function render()
    {
        return view('livewire.product-details');
    }
}
