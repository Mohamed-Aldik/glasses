<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Importer\ImporterDashboardComponent;


Route::middleware(['auth:sanctum', 'verified','authimporter'])->group(function(){


Route::get('/importer/dashboard',ImporterDashboardComponent::class)->name('importer.dashboard');
    



});

