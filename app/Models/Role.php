<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\User;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];
    // function for hasOne to User
    public function User(){
        return $this->hasOne(User::class);
    }
    // function for hasOne to Siswa
    // public function Siswa(){
    //     return $this->hasOne(Siswa::class);
    // }
}
