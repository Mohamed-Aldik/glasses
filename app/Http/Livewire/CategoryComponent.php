<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lense;

class CategoryComponent extends Component
{
    
    public $company;
    public $lense_name;
    public $sph;
    public $cyl;
    public $index;
    public $lens_options;
    public  function mount()
    {
        $this->company = "test";
        $this->lense_name = "progressive";
        $this->sph = 17.75;
        $this->cyl = 19.5;
        $this->index = 0.75;
        $this->lens_options = "plmc";
    }
    public function render()
    {
        //$lenses=Lense::where('company',$this->company)->where('lens_name',$this->lense_name)->where('sph',$this->sph)->where('cyl',$this->cyl)->where('index',$this->index)->where('lens_option',$this->lens_options)->get();
        $lenses=Lense::all();
        $companies=Lense::select('company')->get();
        return view('livewire.category-component',['lenses'=>$lenses,'companies'=>$companies])->layoutData(['title' => 'glasses_lenses']);
    }
}
