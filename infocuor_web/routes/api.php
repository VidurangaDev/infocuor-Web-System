<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\EventBooking;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/event-bookings', function() {
    $events = EventBooking::select('id', 'event_name', 'date', 'time')
        ->where('status', 'accepted') // Only show accepted events
        ->get();

    return $events->map(function ($event) {
        return [
            'id' => $event->id,
            'event_name' => $event->event_name,
            'date' => $event->date,
            'time' => $event->time,
        ];
    });
});
