<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'client_name', 'description', 'status'];

    public function stages()
    {
        return $this->belongsToMany(Stage::class, 'project_stages')->withTimestamps();
    }
    use HasFactory;
}
