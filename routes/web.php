<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\LensComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\Wishlist;
use App\Http\Livewire\Admin\AdminLensesComponent;
use App\Http\Livewire\Admin\AdminAddLensesComponent;
use App\Http\Livewire\Admin\AdminEditLensesComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\EditProductComponent;
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
Route::middleware(['auth:sanctum', 'verified','authuseradmin'])->group(function(){
    Route::get('/admin/product',ProductComponent::class)->name('admin.product');
    Route::get('/admin/lenses',AdminLensesComponent::class)->name('admin.lenses');
    Route::get('/admin/add-lens',AdminAddLensesComponent::class)->name('admin.add.lens');
    Route::get('/admin/add-product',AddProductComponent::class)->name('admin.add.product');
    Route::get('/admin/lens/{id}',AdminEditLensesComponent::class)->name('admin.edit.lens');
    Route::get('/admin/product/{id}',EditProductComponent::class)->name('admin.edit.product');

});


Route::get('lang/{lang}', function ($lang) {
    session()->has('lang')?session()->forget('lang'):'';
    $lang == 'ar'?session()->put('lang', 'ar'):session()->put('lang', 'en');
    return back();
});

