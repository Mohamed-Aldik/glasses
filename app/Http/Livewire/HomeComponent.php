<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeCategory;
use App\Models\Category;
use App\Models\Product;

class HomeComponent extends Component
{

    public function render()
    {
        $lproducts = Product::orderby('created_at', 'DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;


        return view('livewire.home-component',[ 'lproducts' => $lproducts,'categories' => $categories, 'no_of_products' => $no_of_products]);
    }
}
