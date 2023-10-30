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
            $table->string('nama_ayah');
            $table->string('nik_ayah')->unique();
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu')->unique();
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ortu');
            $table->text('alamat_ortu')->nullable();
            $table->string('nama_wali');
            $table->string('hubungan_wali');
            $table->string('pekerjaan_wali');
            $table->string('penghasilan_wali');
            $table->text('alamat_wali');
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
