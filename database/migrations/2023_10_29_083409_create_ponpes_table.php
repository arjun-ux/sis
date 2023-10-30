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
        Schema::create('ponpes', function (Blueprint $table) {
            $table->id();
            $table->string('nspp');
            $table->string('nama_ponpes');
            $table->text('alamat_ponpes')->nullable();
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ponpes');
    }
};
