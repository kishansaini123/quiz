<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $dates = [
        'date'
    ];

    public function setClockinAttribute($value)
    {
        $this->attributes['clockin'] = Carbon::parse($value)->format('G:i');
    }

    public function setClockoutAttribute($value)
    {
        $this->attributes['clockout'] = Carbon::parse($value)->format('G:i');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
