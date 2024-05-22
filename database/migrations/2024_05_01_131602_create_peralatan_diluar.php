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
        Schema::create('peralatan_diluar', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('jenis_barang');
            $table->string('merk');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->string('kondisi');
            $table->date('tanggal');
            $table->string('dokumen');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peralatan_diluar');
    }
};
