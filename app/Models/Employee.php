<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'personal_id',
        'presence_number',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'blood_type_id',
        'religion_id',
        'nationality',
        'join_date',
        'work_hour_id',
        'employee_type_id',
        'effective_type_start_date',
        'effective_type_end_date',
        'employee_status_id',
        'effective_status_start_date',
        'effective_status_end_date',
        'structural_position_type_id',
        'effective_structural_pos_start_date',
        'effective_structural_pos_end_date',
        'functional_position_type_id',
        'effective_functional_pos_start_date',
        'effective_functional_pos_end_date',
        'grade_type_id',
        'effective_grade_start_date',
        'effective_grade_end_date',
        'marital_status_id',
        'marital_code_id',
        'marital_code_tax_id',
        'effective_marital_start_date',
        'effective_marital_end_date',
        'shift_group_id',
        'shift_work_hour_id',
        'effective_group_shift_start_date',
        'effective_group_shift_end_date',
        'supervisor_id',
        'effective_supervisor_start_date',
        'effective_supervisor_end_date'
    ];

    public function bloodType(): BelongsTo
    {
        return $this->belongsTo(BloodType::class);
    }

    public function religion(): BelongsTo
    {
        return $this->belongsTo(Religion::class);
    }

    public function workHour(): BelongsTo
    {
        return $this->belongsTo(WorkHour::class);
    }

    public function employeeType(): BelongsTo
    {
        return $this->belongsTo(EmployeeType::class);
    }

    public function employeeStatus(): BelongsTo
    {
        return $this->belongsTo(EmployeeStatus::class);
    }

    public function structuralPositionType(): BelongsTo
    {
        return $this->belongsTo(StructuralPositionType::class);
    }

    public function functionalPositionType(): BelongsTo
    {
        return $this->belongsTo(FunctionalPositionType::class);
    }

    public function gradeType(): BelongsTo
    {
        return $this->belongsTo(GradeType::class);
    }

    public function maritalStatus(): BelongsTo
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function maritalCode(): BelongsTo
    {
        return $this->belongsTo(MaritalCode::class);
    }

    public function maritalCodeTax(): BelongsTo
    {
        return $this->belongsTo(MaritalCodeTax::class);
    }

    public function shiftGroup(): BelongsTo
    {
        return $this->belongsTo(ShiftGroup::class);
    }

    public function shiftWorkHour(): BelongsTo
    {
        return $this->belongsTo(ShiftWorkHour::class);
    }

    public function supervisor(): BelongsTo
    {
        return $this->belongsTo(Supervisor::class);
    }
}
