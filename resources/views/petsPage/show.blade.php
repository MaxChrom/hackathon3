@extends ('navigation')

@section('content')
   <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


        
           <div> 
              <ul>
                 <li>Name:{{$animal->name}}</li>
                 <li>Species:{{$animal->species}}</li>
                <li> Owner: {{$animal->owner->first_name." ".$animal->owner->surname}}</li>
                <li>Breed:{{$animal->breed}}</li>
                <li> Weight in pounds: {{$animal->weight}}</li>
                <li> Age: {{$animal->age}}</li>

              </ul>
                
             
          </div>
       

    
</div>
@endsection