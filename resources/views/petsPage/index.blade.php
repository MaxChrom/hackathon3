@extends('navigation')
@section('content')
<style>
.myDiv {
/* display: flex;
  flex-direction: column;
  flex-wrap: wrap; */
  display:grid;
  grid-template-columns: 1fr 1fr; 
}
.myDiv a  {
display: flex;
  flex-direction: column;
}
img {
    width: 400px;
    padding: 10px;
}

</style> 


<div class="myDiv">

        @foreach ($animals as $animal)
           <div> 
              <h3>
                <img src="/images/pets/{{ $animal->image->path }}">
                 <a href="{{ route('pets.show', ['id' => $animal->id])}}">{{$animal['name']}}</a>
                 </h3>
                   <p>
                         Owner:  {{$animal->owner->first_name." ".$animal->owner->surname}}
                    </p>
                    
            
             
          </div>
        
         @endforeach
    
</div>
@endsection