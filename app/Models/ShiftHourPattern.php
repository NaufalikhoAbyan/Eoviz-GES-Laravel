<?php

namespace App\Models;

use App\Models\ShiftGroup;
use App\Models\ShiftWorkHour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShiftHourPattern extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift_work_hour_id',
        'is_short_day',
        'shift_group_id'
    ];

    public function shiftGroup(): BelongsTo
    {
        return $this->belongsTo(ShiftGroup::class);
    }
    public function shiftWorkHour(): BelongsTo
    {
        return $this->belongsTo(ShiftWorkHour::class);
    }
}
