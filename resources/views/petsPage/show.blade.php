@extends ('navigation')

@section('content')
<style>
    .img {
         max-width: 100%;
      }
   
</style>
   <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div> 
              
              <div class="img">
               <img src="/images/pets/{{ $animal->image->path }}" alt="">
              </div>
                 <p>Name: {{$animal->name}}</p>
                 <p>Species: {{$animal->species}}</p>
                <p> Owner: {{$animal->owner->first_name." ".$animal->owner->surname}}</p>
                <p>Breed: {{$animal->breed}}</p>
                <p> Weight in pounds: {{$animal->weight}}</p>
                <p> Age: {{$animal->age}}</p>

             
                
             
          </div>
       

    
</div>
@endsection