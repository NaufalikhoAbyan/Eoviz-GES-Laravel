<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FunctionalPositionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'functional_position_type_id',
        'code',
        'name',
        'order',
        'status',
        'description'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(FunctionalPositionType::class, 'functional_position_type_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(FunctionalPositionType::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'functional_position_type_id');
    }
}
