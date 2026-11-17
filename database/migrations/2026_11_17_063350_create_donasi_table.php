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
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petak_id') -> constrained('petak');
            $table->foreignId('pohon_id') -> constrained('pohon');
            $table->foreignId('moderator') -> nullable() -> constrained('admin')->nullOnDelete();

            // isian donatur dari form
            $table->string('nama_donatur');
            $table->text('pesan') -> nullable();

            $table->dateTime('tanggal_donasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi');
    }
};
