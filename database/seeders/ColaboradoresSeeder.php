<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colaboradores;

class ColaboradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colaboradores::factory(10)->create();
    }
}
