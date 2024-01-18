<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CargoColaborador;

class CargoColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CargoColaborador::factory(10)->create();
    }
}
