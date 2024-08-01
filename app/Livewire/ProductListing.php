<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ProductListing extends Component
{
    public $products;
    public $searchTerm = '';
    public $selectedCategories = [];
    public $current_product_id;

    public function mount($current_product_id)
    {
        $this->current_product_id = $current_product_id;
        $this->updateProductList();
    }

    public function updatedSearchTerm()
    {
        $this->updateProductList();
    }

    public function toggleCategory($categoryId)
    {
        if (in_array($categoryId, $this->selectedCategories)) {
            $this->selectedCategories = array_diff($this->selectedCategories, [$categoryId]);
        } else {
            $this->selectedCategories[] = $categoryId;
        }
        $this->updateProductList();
    }

    public function updateProductList()
    {
        $query = Product::with('category')
            ->where('id', '!=', $this->current_product_id)
            ->where('name', 'like', '%' . $this->searchTerm . '%');

        if (!empty($this->selectedCategories)) {
            $query->whereIn('category_id', $this->selectedCategories);
        }

        $this->products = $query->get();
    }

    public function render()
    {
        return view('livewire.product-listing', [
            'categories' => Category::all()
        ]);
    }
}
