<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StructuralPositionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'structural_position_type_id',
        'code',
        'name',
        'order',
        'status',
        'description'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(StructuralPositionType::class, 'structural_position_type_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(StructuralPositionType::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'structural_position_type_id');
    }
}
