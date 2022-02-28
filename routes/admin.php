<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCustomerComponent;
use App\Http\Livewire\Admin\AdminEditCustomerComponent;
use App\Http\Livewire\Admin\AdminImporterComponent;
use App\Http\Livewire\Admin\AdminEditImporterComponent;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\EditCategoryComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;





Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/category',CategoryComponent::class)->name('admin.category');
    Route::get('/admin/customer',AdminCustomerComponent::class)->name('admin.customer');
    Route::get('/admin/importer',AdminImporterComponent::class)->name('admin.importer');
    Route::get('/admin/add-category',AddCategoryComponent::class)->name('admin.add.category');
    Route::get('/admin/customer/{id}',AdminEditCustomerComponent::class)->name('admin.edit.customer');
    Route::get('/admin/importer/{id}',AdminEditImporterComponent::class)->name('admin.edit.importer');
    Route::get('/admin/category/{id}',EditCategoryComponent::class)->name('admin.edit.category');
    Route::get('/admin/home-categories', AdminHomeCategoryComponent::class)->name('admin.homecategories');

});
