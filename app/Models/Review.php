<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model

{
    use HasFactory;

    protected $fillable = ['comments', 'reviews', 'user_id'];  // Mass assignment protection

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function parent()
{
    return $this->belongsTo(Review::class, 'parent_id');
}

// Relationship for the replies to the current comment
public function replies()
{
    return $this->hasMany(Review::class, 'parent_id');
}
public function facility()
{
    return $this->belongsTo(Facility::class);
}



}
