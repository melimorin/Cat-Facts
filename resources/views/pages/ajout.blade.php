@extends('layout.layout')

@section('contenu')
@if ($errors->any())

@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endforeach

@endif
<form action="/ajout" method="post">
@csrf
    <div class="form-group">
        <label for="faits">Nouveau fait</label>
        <input class="form-control" type="text" name="faits" id="faits">
    </div>
    <input class="btn btn-primary w-100" type="submit" value="Creer">
</form>
@endsection
