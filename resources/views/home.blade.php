@extends('layouts.app')

@section('content')




<div>
    <a href="{{ route('unidade.index') }}">Unidades</a>
    <a href="{{ route('unidade.create') }}">Criar Nova Unidade</a>
</div>

<div>
    <a href="{{ route('colaboradores.index') }}">Colaboradores</a>
    <a href="{{ route('colaboradores.create') }}">Criar Novo Colaboradores</a>
</div>

<div>
    <a href="{{ route('cargoColaborador.index') }}">Cargo Colaborador</a>
    <a href="{{ route('cargoColaborador.create') }}">sdfsdfsdfsdfsdf</a>
</div>

@endsection
