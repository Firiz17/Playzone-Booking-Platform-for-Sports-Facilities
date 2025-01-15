<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'sport',
        'date',
        'time',
        'city',
        'location',
        'prizes',
        'total_slots',
        'available_slots',
        'image_path'
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
} 