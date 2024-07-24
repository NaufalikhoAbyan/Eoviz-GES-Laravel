<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'work_hour_id');
    }
}
