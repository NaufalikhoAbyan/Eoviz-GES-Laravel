<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BloodType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'blood_type_id');
    }
}
