<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\LensComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\Wishlist;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',HomeComponent::class)->name('home');
Route::get('/lenses',LensComponent::class)->name('lenses');
Route::get('/category/{id}',CategoryComponent::class)->name('category');
Route::get('/cart',CartComponent::class)->name('cart');
Route::get('/wishlist',Wishlist::class)->name('wishlist');


Route::get('lang/{lang}', function ($lang) {
    session()->has('lang')?session()->forget('lang'):'';
    $lang == 'ar'?session()->put('lang', 'ar'):session()->put('lang', 'en');
    return back();
});

