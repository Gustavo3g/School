<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
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
            'cpf' => $this->faker->numberBetween(12),
            'birth_date' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->name('masculino|feminino|naobinario'),
            'responsible_id' => 1,
        ];
    }
}
