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
        Schema::create('ortus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->unique()->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->unique()->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ortu')->nullable();
            $table->text('alamat_ortu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('hubungan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ortus');
    }
};
