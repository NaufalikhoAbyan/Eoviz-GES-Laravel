<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hour',
        'holiday',
        'status',
        'description',
        'is_locked'
    ];
}
