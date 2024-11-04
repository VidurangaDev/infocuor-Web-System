<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = ['name'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_stages')->withTimestamps();
    }
    use HasFactory;
}
