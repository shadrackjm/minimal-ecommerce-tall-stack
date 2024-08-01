<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class ItemCard extends Component
{
    public $product;
    public function mount($product_details){
        $this->product = $product_details;
    }
    public function placeholder(){
        return view('livewire.skeleton.item-skeleton');
    }

    //adding item to cart
    public function addToCart($productId)
    {
        $cartItem = ShoppingCart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += 1; // increment its quantity
            $cartItem->save();
        } else {
            ShoppingCart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
        //dispatch
        $this->dispatch('cartUpdated');
    }
    public function render()
    {
        return view('livewire.item-card');
    }
}
