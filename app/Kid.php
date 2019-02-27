<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $fillable = [
        'user_id',
        'firstName',
        'lastName',
        'DOB',
        'school'
    ];

    public function age() {
        return 11;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function goals() {
        return $this->hasMany(Goal::class);
    }
}
