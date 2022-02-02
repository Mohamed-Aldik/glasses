<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class EditProductComponent extends Component
{
    public $name;
    public $company;
    public $description;
    public $category_id;
    public $regular_price;
    public $wholesale_price;
    public $idd;

    public function mount($id)
    {
        
        $this->idd = $id;
        $product=Product::find($id);
        if($product){
        $this->name = $product->name;
        $this->description = $product->description;
        $this->category_id = $product->category_id;
        $this->regular_price = $product->regular_price;
        $this->wholesale_price = $product->wholesale_price;
        }
        else
        return abort(404);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'company' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'regular_price' => 'required',
            'wholesale_price' => 'required'
        ]);
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'company' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'regular_price' => 'required',
            'wholesale_price' => 'required'

        ]);
        $product = Product::find($this->idd);
        $product->name = $this->name;
        $product->company = $this->company;
        $product->description = $this->description;
        $product->category_id = $this->category_id;
        $product->regular_price = $this->regular_price;
        $product->wholesale_price = $this->wholesale_price;
        $product->user_id = auth()->user()->id;
        $product->save();
        session()->flash('message', 'Product has been created successfully!');
    }
    public function render()
    {
        $categories=Category::all();

        return view('livewire.admin.edit-product-component',['categories'=>$categories]);
    }
}
