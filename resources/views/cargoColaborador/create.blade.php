{{-- resources/views/cargoColaborador/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1 class="text-center m-5">Adicionar Colaborador</h1>
    @include('cargoColaborador.form', ['action' => route('cargoColaborador.store'), 'method' => 'POST'])
@endsection
