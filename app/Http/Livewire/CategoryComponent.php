<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lense;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $company=0;
    public $lense_name=0;
    public $sph=0;
    public $cyl=0;
    public $index=0;
    public $lens_options=0;
    public $regular_price;
    public $wholesale_price;

    use WithPagination;

   
    public function render()
    {
        // if ($this->company = 0 && $this->lense_name = 0 && $this->index = 0 && $this->lens_options = 0)
        //     $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->paginate(10);
        // else if ($this->lense_name = 0 && $this->index = 0 && $this->lens_options = 0)
        //     $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->where('company', $this->company)->paginate(10);
        // else if ($this->index = 0 && $this->lens_options = 0)
        //     $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->where('company', $this->company)->where('lens_name', $this->lense_name)->paginate(10);
        // else if ($this->lens_options = 0)
        //     $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->where('company', $this->company)->where('lens_name', $this->lense_name)->where('index', $this->index)->paginate(10);
        // else
        //     $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->where('company', $this->company)->where('lens_name', $this->lense_name)->where('index', $this->index)->where('lens_option', $this->lens_options)->paginate(10);
            
            $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->paginate(10);

        $companies = Lense::select('company')->distinct()->get();
        return view('livewire.category-component', ['lenses' => $lenses, 'companies' => $companies])->layoutData(['title' => 'glasses_lenses']);
    }
}
