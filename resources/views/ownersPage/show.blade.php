@extends('navigation')
@section('content')


<div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="color: white;">
        
    <p>{{$owner->name}} {{$owner->surname}}</p>
    <p>{{$owner->address}}</p>
    <p>{{$owner->email}}</p>
    <p>{{$owner->phone}}</p>
       
    <h3>Pets:</h3>
    <ul>
        @foreach ($owner->animals as $animal)
          <li><a href="{{ route("pets.show", ["id" => $animal->id])}}">{{$animal->name}}</a></li>
        @endforeach
    </ul>

</div>
@endsection
