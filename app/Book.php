<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'ISBN',
        'recommended_age'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
