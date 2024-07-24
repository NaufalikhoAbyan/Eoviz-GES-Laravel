<?php

use App\Models\StructuralPositionType;
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
        Schema::create('structural_position_types', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(StructuralPositionType::class)->nullable()->constrained()->restrictOnDelete();
            $table->string('code', 255);
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
        Schema::dropIfExists('structural_position_types');
    }
};
