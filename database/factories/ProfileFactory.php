<?php

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'worker_id' => Worker::factory()->create(),
            'city' => fake()->city,
            'skill'	=> fake()->jobTitle,
            'experience' =>	fake()->numberBetween(0, 10),
            'finished_study_at' =>fake()->date,
        ];
    }
}
