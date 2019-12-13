
@extends('layout.layout')

@section('fact title')
    Faits
@endsection

@section('contenu')

    @foreach ($randomfacts as $randomfact)
    <ul class="list-group ">
        <li class="list-group-item">{{$randomfact->faits}}</li>
    </ul>
    @endforeach


@endsection

@section('boutons')

        <ul class="social">
            <li><a href="/liste">Liste de faits</a></li>
            <li><a href="/ajout">Ajouter un fait</a></li>
        </ul>
@endsection
