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
        $gender = ['masculino', 'feminino', 'naobinario'];
        return [
            'name' => $this->faker->name(),
            'cpf' => $this->faker->numberBetween(11),
            'birth_date' => $this->faker->date('Y-m-d'),
            'gender' => $gender[rand(0,2)],
            'disciplines' => null,
            'registered_id' => null

        ];
    }
}
