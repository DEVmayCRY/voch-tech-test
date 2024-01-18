<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargos;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargos::factory(10)->create();
    }
}
