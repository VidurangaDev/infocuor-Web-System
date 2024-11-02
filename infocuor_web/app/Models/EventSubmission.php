<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'email', 'event_name', 'event_time', 'indoor_outdoor',
        'location', 'faculty', 'duration', 'audience', 'date', 'time', 
        'requirements', 'photo_types', 'video_types'
    ];

    protected $casts = [
        'requirements' => 'array',
        'photo_types' => 'array',
        'video_types' => 'array',
    ];
}
