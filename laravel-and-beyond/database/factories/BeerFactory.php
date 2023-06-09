<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beer>
 */
class BeerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'image' => './Images/duvel.jpg',
            'type' => fake()->word(),
            'country' => fake()->country(),
            'alcohol_percentage' => fake()->randomFloat(2, 0, 100),
            'brewery' => fake()->company(),
            'info' => fake()->text($maxNbChar = 200),
        ];
    }
}
