@extends('layout.index')

@section('content')

<div style="display: grid; grid-template-columns: repeat(4 1fr);gap:2rem;">
@foreach ($animals as $animal )
<div>
        {{$animal -> espece}}
        {{$animal -> age}}
        <a href="/AnimalEdit/{{$animal->id}}"><button type="submit">editer</button></a>
    <form style="display: inline;" action="/{{$animal->id}}/delete" method="post">
            @csrf
            @method('DELETE')
        <button type="submit">delete</button> </div>
    </form>

@endforeach
</div>
@endsection
