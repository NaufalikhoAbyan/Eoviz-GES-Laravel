<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MaritalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'status',
        'description',
        'marital_status_id'
    ];

    public function maritalStatus(): BelongsTo
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'marital_code_id');
    }
}
