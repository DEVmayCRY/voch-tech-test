@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-5">Teste Voch Tech</h2>
    <h3 class="text-center">Tabelas criadas no banco de dados:</h3>
        <p class="text-center">
            • Unidades - id, nome_fantasia, razao_social, cnpj <br />
            • Colaboradores - id, unidade_id, nome, cpf, email<br />
            • Cargos - id, cargo<br />
            • Cargo_Colaborador - id, cargo_id, colaborador_id, nota_desempenho (nota_desempenho de
            0 a 10)
        </p>

        <h3 class="text-center">Cadastros desenvolvidos</h3>
        <p class="text-center">
            • Unidades <br />
            • Colaboradores com desempenho e update
        </p class="text-center">

        <h3 class="text-center">Relatórios desenvolvidos</h3>
        <p class="text-center">
            • Relatório de Colaboradores <br />
            • Total de Colaboradores por Unidade <br />
            • Ranking de Colaboradores melhores avaliados
        </p>

 @endsection
