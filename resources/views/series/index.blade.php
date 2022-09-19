@extends('layouts.app')

@section('title', 'Series')

@section('content')
    <h1>Series</h1>

        <a href="{{route('series.create')}}" rel="noopener noreferrer" class="btn btn-success">Novo</a>
    <hr>
    <ul class="list-group">
        @forelse ($series as $serie)
            <li class="list-group-item">{{$serie->name}}</li>
        @empty
            <li class="list-group-item">Não existem itens</li>
        @endforelse
    </ul>
@endsection
