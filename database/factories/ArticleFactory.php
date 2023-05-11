<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        $body = $this->faker->paragraph(100, true);
        $img = 'https://via.placeholder.com/600/sf1138/FFF/?text=laravel:8.*';

        return [
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
            'img' => $img,
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
