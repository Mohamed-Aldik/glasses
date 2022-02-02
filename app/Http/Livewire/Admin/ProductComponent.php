<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductComponent extends Component
{
    public function deleteProduct($id)
    {
        $lens = Product::find($id);
        $lens->delete();
        session()->flash('message', 'lens has been delete successfully!');
    }
    public function render()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        return view('livewire.admin.product-component', ['products' => $products])->layoutData(['title' => 'Product']);
    }
}
