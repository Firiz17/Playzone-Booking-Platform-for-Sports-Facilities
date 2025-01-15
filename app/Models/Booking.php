<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['facility_id', 'start_time', 'end_time', 'payment_status'];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
