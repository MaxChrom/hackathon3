@extends('navigation')
@section('content')


<div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="color: white;">
        
    <ul>

          <p>{{$owner->name}} {{$owner->surname}}</p>
          <p>{{$owner->address}}</p>
          <p>{{$owner->email}}</p>
          <p>{{$owner->phone}}</p>
          <h3>Pets:</h3>
          @foreach ($owner->animals as $animal)
            <a href="{{ route("pets.show", ["id" => $animal->id])}}">{{$animal->name}}</a>
          @endforeach
      </ul>

</div>
@endsection
