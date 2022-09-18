@extends('layouts.app')

@section('title', 'Series')

@section('content')
    <h1>Series</h1>

        <a href="{{route('series.create')}}" rel="noopener noreferrer" class="btn btn-success">Novo</a>
    <hr>
    <ul>
        @forelse ($series as $serie)
            <li>{{$serie->name}}</li>
        @empty
            <li>Não existem itens</li>
        @endforelse
    </ul>
@endsection
