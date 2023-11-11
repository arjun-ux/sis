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
}
