<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(5),
            'deskripsi' => $this->faker->sentence(10),
            'user_id' => 1,
            'link' => 'https://www.youtube.com/embed/msizPweg3kE',
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
