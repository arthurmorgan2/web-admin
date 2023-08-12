<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->insert([
        //    'name' => Str::random(10),
        //   'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        DB::table('pengunjung')->insert([
            // nama_lengkap	umur	pekerjaan	konsultasi_bidang	
            // alamat	konsultasi	created_at	updated_at	
            'nama_lengkap' => 'Nura Gay 69',
            'pekerjaan' => 'Pegawai KFC',
            'konsultasi_bidang' => 'Kesehatan',
            'alamat' => 'Jl. KFC No. 69',
            'konsultasi' => 'Apakah Gay punya HAK untuk hidup?',
            'created_at' => now(),
        ]);
    }
}
