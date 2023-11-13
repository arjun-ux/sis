<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Diniyyah;
use App\Models\Domisili;
use App\Models\Kamar;
use App\Models\Ortu;
use App\Models\Role;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123123'),
            'role_id' => 1
        ]);

        Role::create([
            'role_name' => 'admin'
        ]);
        Role::create([
            'role_name' => 'siswa'
        ]);
        Diniyyah::create([
            'nama_tingkatan' => 'Ula',
            'kelas' => mt_rand(1,4),
        ]);
        Diniyyah::create([
            'nama_tingkatan' => 'Wustho',
            'kelas' => mt_rand(1,2),
        ]);
        Diniyyah::create([
            'nama_tingkatan' => 'Ulya',
            'kelas' => mt_rand(1,2),
        ]);
        Domisili::create([
            'kategori_domisili' => 'Muqim'
        ]);
        Domisili::create([
            'kategori_domisili' => 'Non-Muqim'
        ]);
        Kamar::create([
            'nama_kamar' => 'A',
            'ketua_kamar' => 'Aminuddin'
        ]);
        Kamar::create([
            'nama_kamar' => 'B',
            'ketua_kamar' => 'Elang Prakoso'
        ]);

        Ortu::factory(7)->create();
        // Siswa::factory(10)->create();

    }
}
