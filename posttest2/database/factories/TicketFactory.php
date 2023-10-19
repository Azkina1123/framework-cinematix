<?php

namespace Database\Factories;

use App\Models\Cinema;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "harga" => fake()->randomElement([35000, 25000, 20000, 30000, 40000]),
            "tgl_waktu_tayang" => fake()->dateTime(),
            "id_movie" => Movie::all()->random()->id,
            "id_cinema" => Cinema::all()->random()->id
        ];
    }
}
