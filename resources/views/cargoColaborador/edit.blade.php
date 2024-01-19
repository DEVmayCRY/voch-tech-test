{{-- resources/views/cargoColaborador/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Editar Unidade</h1>
    @include('cargoColaborador.form', ['action' => route('cargoColaborador.update', $cargoColaborador->id), 'method' => 'PUT'])
@endsection
