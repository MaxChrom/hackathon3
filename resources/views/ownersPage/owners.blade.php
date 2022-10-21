@extends('navigation')
@section('content')

<style>
  .ownersDiv {
    display: flex;
    flex-direction: column;
    align-content: left;
    margin: 1rem;
    font-size: 2rem;

  } 
  .container1{

  }
  
</style>

<div class = "container1">
        <h1 style="margin:2rem; fonst-size:2.5rem;">List of pet owners:</h1>
    <ul>
        @foreach ($owners as $owner)
        <div class="ownersDiv" style="color: white;">
              <li><a href="{{ route("owners.owner", ["id" => $owner->id])}}">{{$owner->first_name}} {{$owner->surname}}</a></li>
         </div>
              @endforeach
      </ul>
      </div>


@endsection