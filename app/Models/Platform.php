<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = ['name', 'logo', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book(){
        return $this->belongsToMany(Book::class);
    }
}
