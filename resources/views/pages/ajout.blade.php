@extends('layout.layout')

@section('contenu')
<form action="/ajout" method="post">
@csrf
    <div class="form-group">
        <label for="faits">Nouveau fait</label>
        <input class="form-control" type="text" name="faits" id="faits">
    </div>
    <input class="btn btn-primary w-100" type="submit" value="Creer">
</form>
@endsection
