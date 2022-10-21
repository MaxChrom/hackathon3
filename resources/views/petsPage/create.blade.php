@extends ('navigation')
@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<form method="POST" action="{{ route('petsPage.store')}}">
    @csrf
<div>
    <label for="pet-name">Pet Name</label>
    <input type="text" id="pet-name" value="{{ old('pet-name')}}" name="pet-name">
</div>
<div>
    <label for="species">Species</label>
    <input type="text" id="species" value="{{ old('species')}}" name="species">
    
</div>
<div>
    <label for="breed">Breed</label>
    <input type="text" id="breed" value="{{ old('breed')}}" name="breed">
 
</div>
<div>
    <label for="age">Age</label>
    <input type="text" id="age" value="{{ old('age')}}" name="age">
 
</div>
<div>
    <label for="weight">Weight in pounds</label>
    <input type="number" id="weight" value="{{ old('weight')}}" name="weight">
 
</div>
<div>
    <button type="submit">Submit</button>
</div>

</form>
        
    
</div>
@endsection