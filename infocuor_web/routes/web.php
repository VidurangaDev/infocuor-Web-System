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
Route::get('/membership', function () {
    return view('pages.membership');
});

Route::get('/service', function () {
    return view('pages.service');
});
Route::get('/photography', function () {
    return view('pages.photography');
});

Route::get('/videography', function () {
    return view('pages.videography');
});

Route::get('/livestreaming', function () {
    return view('pages.livestreaming');
});

Route::get('/meadiareporting', function () {
    return view('pages.meadiareporting');
});

Route::get('/history', function () {
    return view('pages.history');
});

//Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('backpack.dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/hire-us', [\App\Http\Livewire\HireForm::class, 'index'])->name('hire-us');
});

Route::get('/userdashboard', [DashboardController::class, 'index'])->name('user.index');

Route::get('/service', function () {
    return view('pages.service');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'showGallery']);
