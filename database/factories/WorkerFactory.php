<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'surname' => fake()->lastname,
            'email' => fake()->unique()->safeEmail(),
            'age' => fake()->numberBetween(18, 50),
            'description' => fake()->text(200),
            'is_married' => fake()->boolean,
            'position_id' => Position::inRandomOrder()->first()->id
        ];
    }
}
