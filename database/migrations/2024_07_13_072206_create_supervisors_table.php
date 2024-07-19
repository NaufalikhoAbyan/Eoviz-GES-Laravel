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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 255);
            $table->string('street', length: 255);
            $table->string('country', length: 255);
            $table->string('state', length: 255);
            $table->string('city', length: 255);
            $table->integer('postal_code');
            $table->integer('phone')->length(12)->unique();
            $table->integer('mobile')->length(12)->unique();
            $table->string('email', length: 255)->unique();
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
        Schema::dropIfExists('supervisors');
    }
};
