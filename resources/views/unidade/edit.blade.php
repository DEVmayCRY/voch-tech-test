{{-- resources/views/unidades/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Editar Unidade</h1>
    @include('unidade.form', ['action' => route('unidade.update', $unidade->id), 'method' => 'PUT'])
@endsection
