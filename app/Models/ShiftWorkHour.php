<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
