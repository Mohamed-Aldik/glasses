<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lense;
use Livewire\WithPagination;
use Cart;

class LensComponent extends Component
{
    public $company;
    public $lense_name;
    public $sph;
    public $cyl;
    public $index;
    public $lens_options;

    public $regular_price;
    public $wholesale_price;

    use WithPagination;

    public function addWishlist($lensid, $lensename, $lensprice)
    {
        Cart::instance('wishlist')->add($lensid, $lensename, 1, $lensprice)->associate('App\Models\Lense');
        $this->emitTo('wishlist-count', 'refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count', 'refreshComponent');
                return;
            }
        }
    }
    
    public function store($lensid, $lensename, $lensprice)
    {

        Cart::instance('cart')->add($lensid, $lensename, 1, $lensprice)->associate('App\Models\Lense');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('cart');
    }
    public function search()
    {
  
    }
    public function render()
    {
        // $lenses = Lense::paginate(10);

        // if ($this->company = 0 && $this->lense_name = 0 && $this->index = 0 && $this->lens_options = 0)
        // $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->paginate(10);
        // else if ($this->lense_name = 0 && $this->index = 0 && $this->lens_options = 0)
        //  $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->where('company', $this->company)->paginate(10);
        // else if ($this->index = 0 && $this->lens_options = 0)
        //     $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->where('company', $this->company)->where('lens_name', $this->lense_name)->paginate(10);
        // else if ($this->lens_options = 0)
        //     $lenses = Lense::where('sph', $this->sph)->where('cyl', $this->cyl)->where('company', $this->company)->where('lens_name', $this->lense_name)->where('index', $this->index)->paginate(10);
        // else
       
        $company= '%'. $this->company.'%';
        $lense_name= '%'. $this->lense_name.'%';
        $sph= '%'. $this->sph.'%';
        $cyl= '%'. $this->cyl.'%';
        $index= '%'. $this->index.'%';
        $lens_options= '%'. $this->lens_options.'%';
        $lenses = Lense::where('sph', 'like',$sph)->where('cyl', 'like',$cyl)->where('company', 'like',$company)->where('lens_name', 'like',$lense_name)->where('index', 'like',$index)->where('lens_option', 'like',$lens_options)->paginate(10);

        
      

        $companies = Lense::select('company')->distinct()->get();
        return view('livewire.lens-component', ['lenses' => $lenses, 'companies' => $companies])->layoutData(['title' => 'glasses_lenses']);
    }
}
