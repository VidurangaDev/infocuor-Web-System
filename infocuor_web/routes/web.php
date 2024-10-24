<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\HireForm;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
});

//Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('backpack.dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/hire-us', [\App\Http\Livewire\HireForm::class,'index'])->name('hire-us');
});

Route::get('/userdashboard', [DashboardController::class, 'index'])->name('user.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function ()

{
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
