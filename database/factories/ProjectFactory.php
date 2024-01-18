<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'volume' => fake()->randomFloat(1, 1, 20),
            'type_id' => fake()->randomElement(['1', '2', '3', '4']),
            'word_count' => fake()->randomNumber(5, false),
            'deadline' => fake()->dateTimeBetween('now', '+30 days'),
        ];
    }
}
