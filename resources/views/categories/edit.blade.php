@extends('layouts.category')

@section('title', 'Modifica la categoria')

@section('content')

<form action="{{route('categories.update', $category)}}" method="POST" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
   <div class="m-3">
<label for="name">Inserisci il nome</label>
<input class="form-control" name="name" id="name" value="{{$category->name}}" type="text">
@error('name')
    <div class="text-danger">{{$message}}</div>
@enderror

</div> 
<a  class="btn btn-outline-secondary mt-3" href="{{route('categories.index')}}">Annulla</a>
<button class="btn btn-outline-primary mt-3" type="submit">Modifica</button>
</form>
    
@endsection