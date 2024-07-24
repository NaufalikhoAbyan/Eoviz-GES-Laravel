<?php

namespace App\Models;

use App\Models\ShiftHourPattern;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function shiftHourPatterns(): HasMany
    {
        return $this->hasMany(ShiftHourPattern::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'shift_group_id');
    }
}
