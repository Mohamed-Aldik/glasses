<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Lense;

class AdminEditLensesComponent extends Component
{
    public $company;
    public $lense_name;
    public $sph;
    public $cyl;
    public $index;
    public $lens_options;
    public $regular_price;
    public $wholesale_price;
    public $idd;
    
    public function mount($id)
    {
        $this->idd = $id;
        $lens=Lense::find($id);
        
        if($lens && auth()->user()->id === $lens->user_id || auth()->user()->utype ==="ADM" && $lens){
        $this->company = $lens->company;
        $this->lense_name = $lens->lense_name;
        $this->sph = $lens->sph;
        $this->cyl = $lens->cyl;
        $this->index = $lens->index;
        $this->lens_options = $lens->lens_options;
        $this->regular_price = $lens->regular_price;
        $this->wholesale_price = $lens->wholesale_price;
        }
        else
        return abort(404);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'company' => 'required',
            'lense_name' => 'required',
            'sph' => 'required',
            'cyl' => 'required',
            'index' => 'required',
            'lens_options' => 'required',
            'regular_price' => 'required',
            'wholesale_price' => 'required',

        ]);
    }

    public function storeLense()
    {
        $this->validate([
            'company' => 'required',
            'lense_name' => 'required',
            'sph' => 'required',
            'cyl' => 'required',
            'index' => 'required',
            'lens_options' => 'required',
            'regular_price' => 'required',
            'wholesale_price' => 'required',

        ]);
        $lens = Lense::find($this->idd);
        $lens->company = $this->company;
        $lens->lens_name = $this->lense_name;
        $lens->sph = $this->sph;
        $lens->cyl = $this->cyl;
        $lens->index = $this->index;
        $lens->lens_option = $this->lens_options;
        $lens->regular_price = $this->regular_price;
        $lens->wholesale_price = $this->wholesale_price;
        $lens->save();
        session()->flash('message', 'Lens has been updated successfully!');
    }
    

    public function render()
    {
        return view('livewire.admin.admin-edit-lenses-component');
    }
}
