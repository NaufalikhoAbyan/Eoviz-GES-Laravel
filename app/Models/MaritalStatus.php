<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaritalStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_married',
        'status',
        'description'
    ];

    public function maritalCodes(): HasMany
    {
        return $this->hasMany(MaritalCode::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'marital_status_id');
    }
}
