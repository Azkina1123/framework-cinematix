<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cinema>
 */
class CinemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama" => fake()->randomElement(['Shown U', "JeeIn'O", 'LMark', 'Flutix', 'Flutix V2', 'Shine Yeol']),
            "alamat" => fake()->address(),
            "telepon" => fake()->phoneNumber()
        ];
    }
}
