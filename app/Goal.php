<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'kid_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'isCompleted'
    ];

    public function kid() {
        return $this->belongsTo(Kid::class);
    }
}
