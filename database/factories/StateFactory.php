<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $likes = $this->faker->numberBetween(1, 20);
        $views = $this->faker->numberBetween(21, 100);

        return [
            'likes' => $likes,
            'views' => $views
        ];
    }
}
