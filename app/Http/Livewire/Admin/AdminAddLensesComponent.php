<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Lense;

class AdminAddLensesComponent extends Component
{
    public $company;
    public $lense_name;
    public $sph;
    public $cyl;
    public $index;
    public $lens_options;
    public $regular_price;
    public $wholesale_price;

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
        $schedule = Lense::where('company', $this->company)->where('lens_name', $this->lense_name)->where('sph', $this->sph)->where('cyl', $this->cyl)->where('index', $this->index)->where('lens_option', $this->lens_options)->where('regular_price', $this->regular_price)->where('wholesale_price', $this->wholesale_price)->where('user_id', auth()->user()->id)->first();
        if (!$schedule) {
            $lens =  new Lense();
            $lens->company = $this->company;
            $lens->lens_name = $this->lense_name;
            $lens->sph = $this->sph;
            $lens->cyl = $this->cyl;
            $lens->index = $this->index;
            $lens->lens_option = $this->lens_options;
            $lens->regular_price = $this->regular_price;
            $lens->wholesale_price = $this->wholesale_price;
            $lens->user_id = auth()->user()->id;
            $lens->save();
            session()->flash('message', 'Lens has been created successfully!');
        } else {
            session()->flash('message', 'المنتج موجود مسبقا');
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-add-lenses-component')->layoutData(['title' => 'add lense']);
    }
}
