@extends('layouts.app')

@section('content')
<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome Fantasia</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Total de Colaboradores</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unidades as $unidade)
            <tr>
                <td>{{ $unidade->nome_fantasia }}</td>
                <td>{{ $unidade->razao_social }}</td>
                <td>{{ $unidade->cnpj }}</td>
                <td>{{ $unidade->total_colaboradores }}</td>
                <td>
                    <button class="btn btn-primary">
                        <a class="text-white" href="{{ route('unidade.edit', $unidade->id)}}">Editar</a>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center">
        {{ $unidades->links('custom.pagination') }}
    </div>
</div>
@endsection
