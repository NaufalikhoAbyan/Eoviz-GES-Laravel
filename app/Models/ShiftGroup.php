<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'order',
        'status',
        'is_follow_holiday',
        'description'
    ];
}
