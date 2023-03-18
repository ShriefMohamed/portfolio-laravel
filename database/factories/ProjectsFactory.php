<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'keywords' => fake()->string(),
            'description' => fake()->paragraph(),
            'subDomain' => fake()->word(), // password
            'status' => Str::random(1),
            'work_order' => Str::random(1),
        ];
    }
}
