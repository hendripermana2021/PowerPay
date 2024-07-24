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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->float('meter_awal');
            $table->float('meter_akhir');
            $table->integer('jumlah_meter');
            $table->integer('status');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tagihans', function (Blueprint $table) {
            $table->dropForeign(['pelanggan_id']);
        });

        Schema::dropIfExists('tagihans');
    }
};
