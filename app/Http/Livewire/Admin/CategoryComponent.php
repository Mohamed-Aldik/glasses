<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{
    public function deleteCategory($id)
    {
        $lens = Category::find($id);
        $lens->delete();
        session()->flash('message', 'Category has been delete successfully!');
    }
    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.category-component', ['categories' => $categories])->layoutData(['title' => 'Category']);
    }
}
