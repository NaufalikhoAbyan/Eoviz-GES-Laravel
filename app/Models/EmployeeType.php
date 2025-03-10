<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeeType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'is_permanent',
        'order',
        'status',
        'description'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_type_id');
    }
}
