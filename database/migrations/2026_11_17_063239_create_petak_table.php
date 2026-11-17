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
        Schema::create('petak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wilayah_id') -> constrained('wilayah')->cascadeOnDelete();
            $table->unsignedInteger('nomor');
            $table->enum('status', ['kosong', 'dipesan', 'terisi'])->default('kosong');
            $table->timestamps();

            $table->unique(['wilayah_id', 'nomor']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petak');
    }
};
