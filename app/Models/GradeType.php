<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GradeType extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'code',
        'name',
        'order',
        'status',
        'description'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'grade_type_id');
    }
}
