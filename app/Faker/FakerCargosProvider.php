<?php

namespace App\Faker;

use Faker\Provider\Base;

class FakerCargosProvider extends Base
{
    protected static $profissoes = [
        'Desenvolvedor de Software',
        'Analista de Sistemas',
        'Gerente de Projetos',
        'Arquiteto de Software',
        'Analista de Requisitos',
        'Testador de Software',
        'Designer',
        'Desenvolvedor Front-End',
        'Desenvolvedor Back-End',
        'Desenvolvedor Full-Stack',
        'Esp. Segurança da Informação',
        'Gestor de TI',
        'Diretor de TI',
    ];

    public function job()
    {
        return static::$profissoes[array_rand(static::$profissoes)];
    }
}
