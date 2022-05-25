<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
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
            'series' => $this->faker->name('1 ano|feminino|naobinario'),
            'year' => $this->faker->date('Y-m-d'),
        ];
    }
}
