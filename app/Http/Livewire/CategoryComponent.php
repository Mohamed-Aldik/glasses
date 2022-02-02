<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{   
    public $idd;
    public $company;

    public function mount($id)
    {
        
        $category=Category::find($id);
        if($category){
            $this->idd = $id;
        }
        else
        return abort(404);
    }
    
    public function render()
    {
        $category= Category::find($this->idd);
        $products= $category->products()->get();
        return view('livewire.category-component',['products'=>$products]);
    }
}
