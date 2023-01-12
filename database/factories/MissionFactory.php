<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mission>
 */
class MissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Mission ' . fake()->word,
            'universe_id' => fake()->numberBetween(1, 3),
            'threat_level' => fake()->randomElement(['low', 'medium', 'high']),
            'latitude' => fake()->latitude,
            'longitude' => fake()->longitude,
        ];
    }
}
