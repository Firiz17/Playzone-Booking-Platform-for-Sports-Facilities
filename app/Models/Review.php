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

    public function replies()
        {
            return $this->hasMany(Review::class, 'parent_id');  // Replies to the review
        }

        public function parent()
        {
            return $this->belongsTo(Review::class, 'parent_id');  // The original comment (parent)
        }
}
