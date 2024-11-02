<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    use HasFactory;

     // Define the table name if it's not the default (i.e., event_bookings)
     protected $table = 'event_bookings';

     // Define the fillable fields to prevent mass-assignment issues
     protected $fillable = [
         'user_id','name', 'email', 'phone', 'event_name',
         'date', 'time', 'event_location', 'faculty',
         'department', 'photography', 'videography',
         'live_streaming', 'media_reporting','status'
     ];

     // Relationship to the User model
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
