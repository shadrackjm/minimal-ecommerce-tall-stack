<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class ProductListing extends Component
{
    use WithPagination;
    public $products;
    public function mount($category_id,$current_product_id){
        if ($category_id == 0) {
            $this->products = Product::with('category')->limit(4)
            ->orderBy('created_at','DESC')->where('id','!=',$current_product_id)->get();
        }elseif($category_id == 'all'){
            $this->products = Product::with('category')->get();
        } else {
            $this->products = Product::with('category')
            ->where([['category_id',$category_id],['id','!=',$current_product_id]])
            ->limit(4)->get();
        }
    }
    public function render()
    {
        return view('livewire.product-listing',[
            'categories' => Category::all()
        ]);
    }
}
