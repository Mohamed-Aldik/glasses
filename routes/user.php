<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserDashboardComponent;





Route::middleware(['auth:sanctum', 'verified','authuser'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});

