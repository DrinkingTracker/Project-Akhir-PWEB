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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donasi_id')->unique()->constrained('donasi')->cascadeOnDelete();
            $table->foreignId('metode_pembayaran_id')->constrained('metode_pembayaran');
            $table->decimal('jumlah', 12, 2);
            $table->enum('status', ['menunggu', 'berhasil', 'gagal', 'kedaluwarsa'])->default('menunggu');
            $table->dateTime('dibayar_pada')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
