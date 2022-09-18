@extends('layouts.app')

@section('title', 'Series - Novo')

@section('content')
    <h1>Series</h1>
    <hr>
    <form action="{{route('series.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text"
                class="form-control"
                name="name"
                placeholder="Informe o nome da série."
                required
                autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
@endsection
