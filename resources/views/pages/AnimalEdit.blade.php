@extends('layout.index')


<div style="display: grid; grid-template-columns: repeat(3 1fr);">
    @section('content')
    <div>
        <form action="/AnimalEdit/{{$id_show->id}}/update" method="post">
            @csrf
            @method('PUT')
            <input type="text" value="{{$id_show->espece}}" name="espece">
            <input type="number" value="{{$id_show->age}}" name="age">
            <button type="submit">editer</button></div>
        </form>
    @endsection
</div>
