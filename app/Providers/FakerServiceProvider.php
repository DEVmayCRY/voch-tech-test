<?php

namespace App\Providers;

use App\Faker\FakerCargosProvider;
use Faker\{Factory, Generator};
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider

{
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakerCargosProvider($faker));
            return $faker;
        });
    }
}
