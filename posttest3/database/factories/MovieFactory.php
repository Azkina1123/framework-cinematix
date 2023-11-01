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
            "poster" => fake()->randomElement(["movie-1.jpg", "movie-2.jpg", "movie-3.jpg", "movie-4.jpg", "movie-5.jpg", "movie-6.jpg", "movie-7.jpg", "movie-8.jpg", "movie-9.jpg", "movie-10.jpg", "movie-11.jpg", "movie-12.jpg", "movie-13.jpg", "movie-14.jpg", "movie-15.jpg", "movie-16.jpg", "movie-17.jpg"]),
            "ringkasan" => fake()->paragraph(),
            "durasi" => fake()->numberBetween(100, 150),
            "rate" => fake()->randomFloat(2, 5, 10),
            "casts" => fake()->name() . ", " . fake()->name() . ", " . fake()->name(),
        ];
    }
}
