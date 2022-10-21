@extends('navigation')
@section('content')

<style>
  .ownersDiv {
    display: flex;
    flex-direction: column;
    align-content: left;
    margin: 2rem;
  }
</style>

<div class="ownersDiv" style="color: white;">
        
    <ul>
        @foreach ($owners as $owner)
              <li><a href="{{ route("owners.owner", ["id" => $owner->id])}}">{{$owner->first_name}} {{$owner->surname}}</a></li>
          @endforeach
      </ul>

</div>
@endsection