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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 6)->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();

            $table->string('no_nik')->unique()->nullable();
            $table->string('no_kk')->nullable();
            $table->string('nama')->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->unsignedBigInteger('domisili_id')->nullable();
            $table->unsignedBigInteger('ortu_id')->nullable();
            $table->text('alamat')->nullable();

            $table->unsignedBigInteger('diniyyah_id')->nullable();
            $table->unsignedBigInteger('kamar_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
