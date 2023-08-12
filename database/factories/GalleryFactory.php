<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'deskripsi' => $this->faker->sentence(10),
            'user_id' => 1,
            'kategori_gallery' => $this->faker->sentence(1),
            'gambar_gallery' => 'img-test',
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
