@extends('navigation')
@section('content')


<div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="color: white;">
        
    <ul>
        @foreach ($owners as $owner)
              <li><a href="{{ route("owners.owner", ["id" => $owner->id])}}">{{$owner->first_name}} {{$owner->surname}}</a></li>
          @endforeach
      </ul>

</div>
@endsection