<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $subject = $this->faker->sentence(3);
        $body = $this->faker->paragraph(3, false);

        return [
            'subject' => $subject,
            'body' => $body
        ];
    }
}
