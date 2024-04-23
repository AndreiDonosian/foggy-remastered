<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlanFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => fake()->name(),
            'price' => fake()->numberBetween(0, 10),
            'description' => fake()->text(),
        ];
    }
}