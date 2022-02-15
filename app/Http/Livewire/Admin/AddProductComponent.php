<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    public $name;
    public $image;
    public $company;
    public $description;
    public $category_id;
    public $regular_price;
    public $wholesale_price;
    use WithFileUploads;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'company' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'regular_price' => 'required',
            'wholesale_price' => 'required'
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'company' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'regular_price' => 'required',
            'wholesale_price' => 'required'

        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->company = $this->company;
        $product->description = $this->description;
        $product->category_id = $this->category_id;
        $product->regular_price = $this->regular_price;
        $product->wholesale_price = $this->wholesale_price;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;
        $product->user_id = auth()->user()->id;
        $product->save();
        session()->flash('message', 'Product has been created successfully!');
    }
    
    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.add-product-component',['categories'=>$categories]);
    }
}
