@extends('layout.layout')

@section('contenu')
<form action="/modif/{{$id}}" method="post">
@csrf
    <div class="form-group">
        <label for="faits">Modifier</label>
        <input class="form-control" type="text" name="faits" id="faits" value="{{$faits}}">
    </div>
    <input class="btn btn-primary w-100" type="submit" value="Creer">
</form>
@endsection
