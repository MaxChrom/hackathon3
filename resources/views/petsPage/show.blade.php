@extends ('navigation')

@section('content')
<style>
    .img{
      margin: 1rem;
    }
</style>
   <div>
               <div class="img">
               <img src="/images/pets/{{ $animal->image->path }}" alt="">
              </div>

         <div class="list__container_1"> 
                 <ul class="pet__container" >
               <li>Name: {{$animal->name}}</li>
               <li>Species: {{$animal->species}}</li>
               <li>Breed: {{$animal->breed}}</li>
               <li> Weight in pounds: {{$animal->weight}}</li>
               <li> Age: {{$animal->age}}</li>
               <br>
               <li> Owner: {{$animal->owner->first_name." ".$animal->owner->surname}}</li>
              </ul>
               <form action="{{Route('pets.edit',  ['id' => $animal->id])}}">
                  <button>EDIT</button>
               </form>
          </div>

   
</div>
@endsection