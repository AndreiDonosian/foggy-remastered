<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->unique()->word(),
            'description' => fake()->text(200),
            'features' => fake()->text(120),
            'price' => fake()->randomFloat(2, 0, 100),
            'mb_limit' => fake()->numberBetween(10, 102400),
            'status' => true,
        ];
    }
}