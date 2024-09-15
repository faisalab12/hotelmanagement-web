<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_hotel' => fake()->name(),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'rating' => fake()->randomDigitNot(0, 6, 7, 8, 9),
            'email' => fake()->email(),
            'check_in_time' => fake()->date('Y-m-d H:i:s'),
            'check_out_time' => fake()->date('Y-m-d H:i:s'),

        ];
    }
}
