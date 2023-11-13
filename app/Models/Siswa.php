<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Siswa extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory, Authenticatable;
    protected $guarded = [];

    public function Role()
    {
        return $this->belongsTo(Role::class);
    }

    public function Kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
    public function Diniyyah()
    {
        return $this->belongsTo(Diniyyah::class);
    }
    public function Domisili()
    {
        return $this->belongsTo(Domisili::class);
    }
    public function Ortu()
    {
        return $this->belongsTo(Ortu::class);
    }

    // generate nis berdasarkan tahun masuk dan nomor urut
    // pendaftaran
    public static function generateNis()
    {
        $tahun = date('Y');
        // ambil 2 angka terkahir dari tahun
        $getDuaAngka = substr($tahun, -2);
        // ambil data siswa terakhir
        $lastSiswa = self::latest()->first();
        if ($lastSiswa == null) {
            // jika datanya kosong maka buatkan 0001
            $noUrut = '0001';
        } else {
            $noUrut = substr($lastSiswa->nis, 2, 4) + 1;
            // $noUrut ='000' . $noUrut;
            $noUrut = str_pad($noUrut, 4, '0', STR_PAD_LEFT);
        }
        $nis = $getDuaAngka . $noUrut;
        return $nis;

    }


}
