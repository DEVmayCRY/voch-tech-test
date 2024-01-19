@extends('layouts.app')

@section('content')
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Unidade</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargoColaborador as $colaboradorIndex)
            <tr>
                <td>{{ $colaboradorIndex->colaborador->nome }}</td>
                <td>{{ $colaboradorIndex->colaborador->cpf }}</td>
                <td>{{ $colaboradorIndex->colaborador->email }}</td>
                <td>{{ $colaboradorIndex->colaborador->unidade->nome_fantasia }}</td>
                <td>{{ $colaboradorIndex->cargo->cargo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center">
        {{ $cargoColaborador->links('custom.pagination') }}
    </div>
</div>
@endsection
