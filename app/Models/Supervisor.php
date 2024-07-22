<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supervisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'country',
        'state',
        'city',
        'postal_code',
        'phone',
        'mobile',
        'email',
        'status',
        'description'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'supervisor_id');
    }
}
