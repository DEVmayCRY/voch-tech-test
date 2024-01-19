{{-- resources/views/unidade/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1 class="text-center m-5">Criar Unidade</h1>
    @include('unidade.form', ['action' => route('unidade.store'), 'method' => 'POST'])
@endsection
