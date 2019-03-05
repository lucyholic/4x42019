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

    public function isAvailable()
    {
        $record = $this->records()->latest()->first();

        if($record == null || $record->return_date == null)
            return true;
        else
            return false;
    }

    public function lentOutTo()
    {
        $record = $this->records()->latest()->first();

        return $record->user();
    }
}
