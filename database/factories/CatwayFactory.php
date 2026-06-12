<?php

namespace Database\Factories;

use App\Models\Catway;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Catway>
 */
class CatwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'catwayNumber'  => fake()->numberBetween(1, 10),
            'catwayType'    => fake()->randomElement(['short', 'long']),
            'catwayState'   => fake()->sentence(),
        ];
    }
}
