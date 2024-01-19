{{-- resources/views/colaboradores/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Criar Colaborador</h1>
    @include('colaboradores.form', ['action' => route('colaboradores.store'), 'method' => 'POST'])
@endsection
