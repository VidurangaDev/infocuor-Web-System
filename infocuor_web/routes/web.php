<?php

use App\Http\Livewire\HireForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventBookingController;


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

Route::middleware(['auth'])->group(function () {
    Route::post('/book-event', [EventBookingController::class, 'submitForm'])->name('event.booking.submit');

});

Route::get('/feedback', function () {
    return view('admin.user.feedback');
})->name('feedback.form');

Route::post('/feedback', [FeedbackController::class,'store'])->name('feedback.submit');







Route::get('/booking/updates', function () {
    return view('admin.member.booking');
})->name('booking_updates');

Route::get('/bookings', [EventBookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings/{id}/accept', [EventBookingController::class, 'accept'])->name('bookings.accept');
Route::post('/bookings/{id}/reject', [EventBookingController::class, 'reject'])->name('bookings.reject');


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
