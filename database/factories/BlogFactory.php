<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->text(20),
            "content" => fake()->realText(),
            "read_time" => fake()->randomDigit(),
            // "image" => fake()->file(),
            "category_id" => fake()->numberBetween(2, 7),
            "user_id" => 1,
        ];
    }
}
