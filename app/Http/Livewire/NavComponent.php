<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class NavComponent extends Component
{
    public function render()
    {
        $categories= Category::all();

        return view('livewire.nav-component',['categories'=>$categories]);
    }
}
