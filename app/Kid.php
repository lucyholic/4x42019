<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Kid extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'DOB',
        'school'
    ];

    public function age($dob) {
        $now_array = explode('-', date('Y-m-d'));
        $dob_array = explode('-', $dob);

        $age = (int)$now_array[0] - (int)$dob_array[0];

        if ((int)$now_array[1] >= (int)$dob_array[1] &&
            (int)$now_array[2] >= (int)$dob_array[2])
            return $age;

        else
            return $age-1;

    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function goals() {
        return $this->hasMany(Goal::class);
    }

    public function isMyKid() {
        return $this->user_id == Auth::id();
    }
}
