<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'available_sports', 'pricing', 'photos', 'user_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
