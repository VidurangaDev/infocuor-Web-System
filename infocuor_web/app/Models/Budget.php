<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'income',
        'outcome',
        'deposited_amount',
        'event_date',
    ];

    public function user()
    {
         return $this->belongsTo(User::class);
    }
}
