<?php

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
        Schema::create('shift_work_hours', function (Blueprint $table) {
            $table->id();
            $table->string('code', length: 255)->unique();
            $table->string('name', length: 255);
            $table->dateTime('begin_log');
            $table->dateTime('end_log');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('start_tolerance');
            $table->integer('end_tolerance');
            $table->dateTime('break_start');
            $table->dateTime('break_end');
            $table->enum('cross_day', ['Yes', 'No']);
            $table->enum('overtime_type', ['Request', 'Automatic']);
            $table->enum('status', ['Active', 'Not Active']);
            $table->string('description', length: 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_work_hours');
    }
};
