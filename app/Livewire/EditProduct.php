<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;
    public $product_name = '';
    public $photo;
    public $product_description = '';
    public $product_price = '';
    public $category_id;
    public $currentUrl;
    public $all_categories;
    public $product_details;
    public function mount($id){
        $this->product_details = Product::find($id);
        $this->product_name = $this->product_details->name;
        $this->product_description = $this->product_details->description;
        $this->product_price = $this->product_details->price;
        $this->category_id = $this->product_details->category_id;
        $this->photo = $this->product_details->image;
        // dd($this->product_details);
        $this->all_categories = Category::all();
    }
    public function update(){
        //validation 
        $this->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'nullable|image|max:1024', // Validate the photo
        ]);
        //check if the image update/uploaded
        if ($this->photo && !is_string($this->photo)) {
            $photoPath = $this->photo->store('photos', 'public');
        } else {
            $photoPath = $this->photo; // Keep the old image path
        }

        $this->product_details->update([
            'name' => $this->product_name,
            'description' => $this->product_description,
            'price' => $this->product_price,
            'category_id' => $this->category_id,
            'image' => $photoPath,
        ]);

        return $this->redirect('/products', navigate: true);
    }
    public function render()
    {
        // $current_url = url()->current();
        
        // $explode_url = explode('/',$current_url);
        // // dd($explode_url);
        // $this->currentUrl = $explode_url[3].' '.$explode_url[5];

        return view('livewire.edit-product')->layout('admin-layout');
    }
}
