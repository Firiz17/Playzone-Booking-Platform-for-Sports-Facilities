<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = ['comments', 'reviews', 'user_id'];  // Mass assignment protection

    public function user(){
        return $this->belongsTo(User::class);
    }
}
