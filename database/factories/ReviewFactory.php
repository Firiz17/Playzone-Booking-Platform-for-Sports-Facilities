<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comments' => $this->faker->sentence, // Random comment
            'reviews' => $this->faker->numberBetween(1, 5), // Random rating between 1 and 5
            'user_id' => User::inRandomOrder()->first()->id, // Assign a random existing user
        ];
    }
}
