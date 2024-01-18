<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cargos;
use App\Models\Colaboradores;

class CargoColaboradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cargo_id' => Cargos::pluck('id')->random(),
            'colaborador_id' => Colaboradores::pluck('id')->random(),
            'nota_desempenho' => $this->faker->randomFloat(1, 0, 10),
        ];
    }

     /**
     * Rename the table name.
     *
     * @return string
     */
    public function getTable()
    {
        return 'cargo_colaborador';
    }
}
