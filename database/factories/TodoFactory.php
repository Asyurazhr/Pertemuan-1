<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [

            'user_id' => rand(1, 100),

            'title' => fake()->sentence(),

            'is_done' => rand(0,1),

        ];
    }
}