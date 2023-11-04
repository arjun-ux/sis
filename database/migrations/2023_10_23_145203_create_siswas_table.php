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
            $table->char('nis', 6)->unique();
            $table->string('no_nik')->unique();
            $table->string('no_kk');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->unsignedBigInteger('domisili_id');
            $table->unsignedBigInteger('ortu_id')->nullable();
            $table->text('alamat');

            $table->unsignedBigInteger('diniyyah_id');
            $table->unsignedBigInteger('kamar_id');
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
