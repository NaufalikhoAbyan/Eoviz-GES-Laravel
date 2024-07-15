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
        Schema::create('grade_types', function (Blueprint $table) {
            $table->id();
            $table->integer('level')->unique();
            $table->integer('code')->unique();
            $table->string('name', 255);
            $table->integer('order')->unique();
            $table->enum('status', ['Active', 'Not Active']);
            $table->string('description', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_types');
    }
};
