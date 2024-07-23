<?php

use App\Models\BloodType;
use App\Models\EmployeeStatus;
use App\Models\EmployeeType;
use App\Models\FunctionalPositionType;
use App\Models\GradeType;
use App\Models\MaritalCode;
use App\Models\MaritalCodeTax;
use App\Models\MaritalStatus;
use App\Models\Religion;
use App\Models\ShiftGroup;
use App\Models\ShiftWorkHour;
use App\Models\StructuralPositionType;
use App\Models\Supervisor;
use App\Models\WorkHour;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);
            $table->integer('personal_id');
            $table->integer('presence_number');
            $table->string('place_of_birth', 255);
            $table->date('date_of_birth');
            $table->enum('gender', ['Male', 'Female']);
            $table->foreignIdFor(BloodType::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(Religion::class)->constrained()->restrictOnDelete();
            $table->string('nationality', 255);
            $table->date('join_date');
            $table->foreignIdFor(WorkHour::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(EmployeeType::class)->constrained()->restrictOnDelete();
            $table->date('effective_type_start_date');
            $table->date('effective_type_end_date');
            $table->foreignIdFor(EmployeeStatus::class)->constrained()->restrictOnDelete();
            $table->date('effective_status_start_date');
            $table->date('effective_status_end_date');
            $table->foreignIdFor(StructuralPositionType::class)->constrained()->restrictOnDelete();
            $table->date('effective_structural_pos_start_date');
            $table->date('effective_structural_pos_end_date');
            $table->foreignIdFor(FunctionalPositionType::class)->constrained()->restrictOnDelete();
            $table->date('effective_functional_pos_start_date');
            $table->date('effective_functional_pos_end_date');
            $table->foreignIdFor(GradeType::class)->constrained()->restrictOnDelete();
            $table->date('effective_grade_start_date');
            $table->date('effective_grade_end_date');
            $table->foreignIdFor(MaritalStatus::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(MaritalCode::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(MaritalCodeTax::class)->constrained()->restrictOnDelete();
            $table->date('effective_marital_start_date');
            $table->date('effective_marital_end_date');
            $table->foreignIdFor(ShiftGroup::class)->constrained()->restrictOnDelete();
            $table->foreignIdFor(ShiftWorkHour::class)->constrained()->restrictOnDelete();
            $table->date('effective_group_shift_start_date');
            $table->date('effective_group_shift_end_date');
            $table->foreignIdFor(Supervisor::class)->constrained()->restrictOnDelete();
            $table->date('effective_supervisor_start_date');
            $table->date('effective_supervisor_end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
