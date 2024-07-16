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
        Schema::create('shift_groups', function (Blueprint $table) {
            $table->id();
            $table->string('code', length: 255);
            $table->string('name', length: 255);
            $table->string('order', length: 255);
            $table->enum('status', ['Active', 'Not Active']);
            $table->boolean('is_follow_holiday');
            $table->string('description', length: 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_groups');
    }
};
