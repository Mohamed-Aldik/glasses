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




Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/customer',AdminCustomerComponent::class)->name('admin.customer');
    Route::get('/admin/importer',AdminImporterComponent::class)->name('admin.importer');
    Route::get('/admin/lenses',AdminLensesComponent::class)->name('admin.lenses');
    Route::get('/admin/add-lens',AdminAddLensesComponent::class)->name('admin.add.lens');
    Route::get('/admin/lens/{id}',AdminEditLensesComponent::class)->name('admin.edit.lens');
    Route::get('/admin/customer/{id}',AdminEditCustomerComponent::class)->name('admin.edit.customer');
    Route::get('/admin/importer/{id}',AdminEditImporterComponent::class)->name('admin.edit.importer');

});
