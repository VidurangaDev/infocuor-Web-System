<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\HireFormController;

Route::get('/hire', [HireFormController::class, 'showForm'])->name('hire.show');
Route::post('/hire/submit', [HireFormController::class, 'submitForm'])->name('hire.submit');


Route::get('/membership-form', [MembershipController::class, 'showForm'])->name('membership.form');
Route::post('/membership-form', [MembershipController::class, 'submitForm'])->name('membership.submit');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
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
