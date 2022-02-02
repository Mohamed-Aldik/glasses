<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AddCategoryComponent extends Component
{
    public $name;
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',

        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->save();
        session()->flash('message', 'Category has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.add-category-component');
    }
}
