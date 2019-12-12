
@extends('layout.layout')


@section('contenu')

    <h1>Faits</h1>

    @foreach ($lesFaits as $unfait)
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$unfait->faits}}</li>
    </ul>
    @endforeach

@endsection
