<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul" => fake()->randomElement(["Concrete Utopia", "Lion King", "The Creator", "The Exorcist", "Hacksaw Ridge", "Fury", "Project Wolf Hunting", "Cat Person"]),
            "poster" => fake()->randomElement(["movie-1.jpg", "movie-2.jpg", "movie-3.jpg", "movie-4.jpg"]),
            "ringkasan" => fake()->paragraph(),
            "durasi" => fake()->numberBetween(100, 150),
            "rate" => fake()->randomFloat(2, 5, 10),
            "casts" => fake()->name(). ", " . fake()->name() . ", " . fake()->name(),
        ];
    }
}
