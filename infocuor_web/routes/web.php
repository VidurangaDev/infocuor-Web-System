<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\HireForm;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/membership', function () {
    return view('pages.membership');
});

Route::get('/history', function () {
    return view('pages.history');
});

// user dashboard Routes
Route::get('/hire', function () {
    return view('admin.user.Hireform');
})->name('hire');


// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::get('/hire-us', [\App\Http\Livewire\HireForm::class,'index'])->name('hire-us');
// });

// Route::get('/userdashboard', [DashboardController::class, 'index'])->name('user.index');
// Route::post('/userdashboard', [DashboardController::class, 'index'])->name('user.index');


// dashboard rout Config.........
Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified',])->group(function () {
    Route::get('/userdashboard', [DashboardController::class, 'index'])->name('userdashboard');
});


Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'showGallery']);
