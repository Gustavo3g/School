<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'school' => $this->faker->name(),
            'series' => rand(1,9),
            'year' => $this->faker->date('Y-m-d'),
        ];
    }
}
