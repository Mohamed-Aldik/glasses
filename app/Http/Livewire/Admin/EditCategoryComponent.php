<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class EditCategoryComponent extends Component
{
    public $name;
    public $idd;

    public function mount($id)
    {
        
        $this->idd = $id;
        $category=Category::find($id);
        if($category){
        $this->name = $category->name;
        }
        else
        return abort(404);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
        ]);
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',

        ]);
        $category = Category::find($this->idd);
        $category->name = $this->name;
        $category->save();
        session()->flash('message', 'Category has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.edit-category-component');
    }
}
