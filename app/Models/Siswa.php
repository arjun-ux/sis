<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [];

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
