<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsibleFactory extends Factory
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
            'birth_date' => $this->faker->date(),
            'gender' => $gender[rand(0,2)]
        ];
    }
}
