<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diniyyah extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
