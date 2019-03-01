<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'ISBN',
        'recommended_age',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function records() {
        return $this->hasMany(Record::class);
    }
}
