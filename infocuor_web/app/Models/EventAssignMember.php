<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAssignMember extends Model
{
    use HasFactory;

    protected $fillable = ['event_booking_id', 'user_id'];

    // Relationship with EventBooking
    public function eventBooking()
    {
        return $this->belongsTo(EventBooking::class);
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
