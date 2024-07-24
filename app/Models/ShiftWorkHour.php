<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'automatic_overtime',
        'status',
        'description'
    ];

    public function shiftHourPattern(): HasMany
    {
        return $this->HasMany(ShiftHourPattern::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'shift_work_hour_id');
    }
}
