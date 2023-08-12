<?php

namespace Database\Factories;

use App\Models\Pengunjung;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengunjungFactory extends Factory
{
    protected $model = Pengunjung::class;

    public function definition()
    {
        // nama_lengkap	umur	pekerjaan	konsultasi_bidang
        // alamat	konsultasi	created_at	updated_at
        return [
            'nama_lengkap' => $this->faker->name(),
            'umur' => $this->faker->numberBetween(15, 100),
            'pekerjaan' => $this->faker->jobTitle(),
            'konsultasi_bidang' => $this->faker->sentence(2),
            'alamat' => $this->faker->address(),
            'konsultasi' => $this->faker->paragraph(1),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
