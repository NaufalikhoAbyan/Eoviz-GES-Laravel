<?php

use App\Models\ShiftGroup;
use App\Models\ShiftWorkHour;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shift_hour_patterns', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ShiftWorkHour::class)->constrained()->restrictOnDelete();
            $table->boolean('is_short_day');
            $table->foreignIdFor(ShiftGroup::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_hour_patterns');
    }
};
