<?php

namespace App\Models;

use App\Models\ShiftHourPattern;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShiftWorkHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'begin_log',
        'end_log',
        'start',
        'end',
        'start_tolerance',
        'end_tolerance',
        'break_start',
        'break_end',
        'cross_day',
        'overtime_type',
        'status',
        'description'
    ];

    public function shiftHourPattern(): HasOne
    {
        return $this->hasOne(ShiftHourPattern::class);
    }
}
