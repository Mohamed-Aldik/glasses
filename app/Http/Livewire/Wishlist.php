<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class Wishlist extends Component
{
    public function removeFromWishlist($id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count', 'refreshComponent');
                return;
            }
        }
    }
    public function moveProductFromWishlistToCart($rowId)
    {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id, $item->name, 1, $item->price)->associate('App\Models\Lense');
        $this->emitTo('wishlist-count', 'refreshComponent');
        $this->emitTo('cart-count-component', 'refreshComponent');
    }
    public function render()
    {
        return view('livewire.wishlist')->layoutData(['title' => 'Wishlist']);
    }
}
