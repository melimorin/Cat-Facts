@extends('layout.layout')

@section('fact title')
    Liste
@endsection

@section('contenu-liste')

    @foreach ($lesFaits as $unfait)

        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$unfait->id}}: {{ Str::limit($unfait->faits, 40)}}</li>
        </ul>
    @endforeach


@endsection

@section('boutons')

        <ul class="social">
            <li><a href="/liste">Retour a l'accueil</a></li>
            <li><a href="/ajout">Ajouter un fait</a></li>
        </ul>
@endsection
