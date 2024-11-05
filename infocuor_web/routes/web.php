<?php

use App\Http\Livewire\HireForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventBookingController;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
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


// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::get('/hire-us', [\App\Http\Livewire\HireForm::class, 'index'])->name('hire-us');
// });

Route::get('/userdashboard', [DashboardController::class, 'index'])->name('user.index');

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/feedback', function () {
    return view('admin.user.feedback');
})->name('feedback.form');

Route::post('/feedback', [FeedbackController::class,'store'])->name('feedback.submit');


Route::get('/budgets', function () {
    return view('budget.index');
})->name('budgets.index');

Route::resource('budgets', BudgetController::class);

Route::get('/budgets/export', [BudgetController::class, 'export'])->name('budgets.export');
Route::get('/budgets/export-email', [BudgetController::class, 'exportToEmail'])->name('budgets.export.email');

Route::get('/booking/updates', function () {
    return view('admin.member.booking');
})->name('booking_updates');

Route::get('/bookings', [EventBookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings/{id}/accept', [EventBookingController::class, 'accept'])->name('bookings.accept');
Route::post('/bookings/{id}/reject', [EventBookingController::class, 'reject'])->name('bookings.reject');

Route::get('/fetch-bookings', [EventBookingController::class, 'fetchBookings']);

Route::post('/booking/{id}/assign-members', [EventBookingController::class, 'assignMembers'])->name('booking.assign-members');




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

Route::get('/documents', function () {
    return view('documents.index');
})->name('documents.index');

Route::resource('documents', DocumentController::class);


Route::get('/calander', function () {
    return view('admin.member.calender');
})->name('member.calender');


Route::get('/calendar/{id}', [EventBookingController::class, 'showCalendar'])->name('calendar.show');

Route::middleware(['auth'])->group(function () {
    Route::post('/update-tracking-status/{id}', [EventBookingController::class, 'updateTrackingStatus'])->name('updateTrackingStatus');
});

// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/certificate/{member}', [CertificateController::class, 'generate'])->name('certificate.generate');


