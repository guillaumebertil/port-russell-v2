<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reservation>
 */
class ReservationFactory extends Factory
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
            'clientName'    => fake()->name(),
            'boatName'      => fake()->name(),
            'startDate'     => $startDate = fake()->dateTimeBetween('-2 months', '+2 months'),
            'endDate'       => fake()->dateTimeBetween($startDate, '+7 months'),
        ];
    }
}
