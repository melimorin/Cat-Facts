@extends('layout.layout')

@section('fact title')
    Liste
@endsection

@section('contenu')

    @foreach ($lesFaits as $unfait)

        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$unfait->id}}: {{ Str::limit($unfait->faits, 40)}} <a class="edit-link" href="/modif/{{$unfait->id}}">Modifier</a> <a class="edit-link" href="/delete/{{$unfait->id}}">Supprimer</a></li>
        </ul>
    @endforeach


@endsection

@section('boutons-top')

        <ul class="social">
            <li><a href="/">Retour a l'accueil</a></li>
            <li><a href="/ajout">Ajouter un fait</a></li>
        </ul>
@endsection
@section('boutons')

        <ul class="social">
            <li><a href="/">Retour a l'accueil</a></li>
            <li><a href="/ajout">Ajouter un fait</a></li>
        </ul>
@endsection
