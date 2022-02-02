<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCustomerComponent;
use App\Http\Livewire\Admin\AdminEditCustomerComponent;
use App\Http\Livewire\Admin\AdminImporterComponent;
use App\Http\Livewire\Admin\AdminEditImporterComponent;
use App\Http\Livewire\Admin\AdminLensesComponent;
use App\Http\Livewire\Admin\AdminAddLensesComponent;
use App\Http\Livewire\Admin\AdminEditLensesComponent;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\EditCategoryComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\EditProductComponent;




Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/category',CategoryComponent::class)->name('admin.category');
    Route::get('/admin/product',ProductComponent::class)->name('admin.product');
    Route::get('/admin/customer',AdminCustomerComponent::class)->name('admin.customer');
    Route::get('/admin/importer',AdminImporterComponent::class)->name('admin.importer');
    Route::get('/admin/lenses',AdminLensesComponent::class)->name('admin.lenses');
    Route::get('/admin/add-lens',AdminAddLensesComponent::class)->name('admin.add.lens');
    Route::get('/admin/add-product',AddProductComponent::class)->name('admin.add.product');
    Route::get('/admin/add-category',AddCategoryComponent::class)->name('admin.add.category');
    Route::get('/admin/lens/{id}',AdminEditLensesComponent::class)->name('admin.edit.lens');
    Route::get('/admin/customer/{id}',AdminEditCustomerComponent::class)->name('admin.edit.customer');
    Route::get('/admin/importer/{id}',AdminEditImporterComponent::class)->name('admin.edit.importer');
    Route::get('/admin/product/{id}',EditProductComponent::class)->name('admin.edit.product');
    Route::get('/admin/category/{id}',EditCategoryComponent::class)->name('admin.edit.category');

});
