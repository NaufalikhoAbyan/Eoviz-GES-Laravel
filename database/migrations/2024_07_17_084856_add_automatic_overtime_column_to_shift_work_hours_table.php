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
        Schema::table('shift_work_hours', function (Blueprint $table) {
            $table->enum('automatic_overtime', ['Presence Before Work Hour', 'Presence After Work Hour', 'Presence Before and After Work Hour'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shift_work_hours', function (Blueprint $table) {
            //
        });
    }
};
