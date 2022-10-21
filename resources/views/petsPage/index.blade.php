@extends('navigation')
@section('content')


<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        @foreach ($animals as $animal)
           <div> 
              <h3>
                 <a href="{{ route('pets.show', ['id' => $animal->id])}}">{{$animal['name']}}</a>
                 </h3>
                  <ul>
                      <li>
                         Owner:  {{$animal->owner->first_name." ".$animal->owner->surname}}
                      </li>
                    
                  </ul>
             
          </div>
        
         @endforeach
    
</div>
@endsection