<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Unidade;

class ColaboradoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unidade_id' => Unidade::pluck('id')->random(),
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->unique()->numerify('###.###.###-##'),
            'email' => $this->faker->unique()->email(),
        ];
    }
}
