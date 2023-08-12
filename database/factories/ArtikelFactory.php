<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Faker\Generator as Faker;
use League\CommonMark\Node\Block\Paragraph;

class ArtikelFactory extends Factory
{
    protected $model = Artikel::class;

    public function definition()
    {
        $title = $this->faker->sentence(10);
        $slug = Str::slug($title);

        return [
            'judul' => $title,
            'slug' => $slug,
            'body' => $this->faker->paragraph(25),
            'sumber' => $this->faker->sentence(2),
            'kategori_id' => 1,
            'user_id' => 1,
            'gambar_artikel' => 'img-test',
            'views' => 1,
        ];
    }
}
