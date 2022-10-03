@extends('layout.index')

@section('content')

<h1>Ajouter un animal</h1>

<form action="create" method="POST">
    @csrf
    <input type="text" name="espece" placeholder="espèce">
    <input type="number" name="age" placeholder="age">
    <input type="submit" value="envoyer">
</form>
@endsection
