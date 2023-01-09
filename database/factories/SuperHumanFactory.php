<?php

namespace Database\Factories;

use App\Models\Universe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperHuman>
 */
class SuperHumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'universe_id' => fake()->numberBetween(1, 3),
            'role' => fake()->randomElement(['hero', 'villain']),
            'name' => fake()->name(),
            'description' => fake()->text(),
        ];

    }
}
