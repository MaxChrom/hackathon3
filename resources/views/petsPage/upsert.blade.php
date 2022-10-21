<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$animal->id ? 'Edit Pet Info' : 'Add New Pet'}}</title>
    <link rel="stylesheet" href="/css/style.css">
    
    
</head>
<body>
    <h3>{{$animal->id ? 'Edit Pet Info' : 'Add New Pet'}}</h3>
        @if($animal->id)
            <form action="{{route('pets.update', $animal->id)}}" method="post">
            @method('PUT')
            @else
            <form action="{{route('pets.store')}}" method="post">
        @endif
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" value={{old('name', $animal->name)}}>
            <label for="name">Age:</label>
            <input type="number" name="age" value={{old('age', $animal->age)}}> 
            <label for="name">Weight:</label>
            <input type="number" name="weight" value={{old('weight', $animal->weight)}}>

            
            
           
            

            <button type='submit'>{{$animal->id ? 'Save' : 'Add'}}</button>

        </form>
        @if($animal->id)
            <form action="{{route('pets.delete', $animal->id)}}" method="POST">
                @csrf
                @method('DELETE')
                 <button type='sumbit'>DELETE</button>
            </form>
        @endif
</body>