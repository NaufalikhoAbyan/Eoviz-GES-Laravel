<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaritalCodeTax extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'order',
        'description'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'marital_code_tax_id');
    }
}
