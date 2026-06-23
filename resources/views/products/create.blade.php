@extends('layouts.product')

@section('title', 'crea un nuovo progetto')

@section('content')
<form class="col-8" action="{{route('products.store')}}" method="POST" enctype='multipart/form-data'>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="name">Nome del piatto</label>
    <input type="text" class="form-control" id="name" name="name">
   
  </div>
  <div class="form-control mb-3 dfle flex-column">
    <label for="">Seleziona la tipologia</label>
    <div>
    @foreach ($types as $type)
    <input type="radio" id="{{$type->name}}" value="{{$type->id}}" name="type">
    <label for="{{$type->name}}">{{$type->name}}</label>
    @endforeach
    </div>
  </div>
   <div class="form-control mb-3 dfle flex-column">
    <label for="">Seleziona le categorie</label>
    <div>
       @foreach ($categories as $category)
    <input type="checkbox" id="{{$category->name}}" value="{{$category->id}}" name="categories[]">
    <label for="{{$category->name}}">{{$category->name}}</label>
    @endforeach
        </div>
  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="img">Aggiungi immagine</label>
    <input type="file" id="img" name='img' accept='image/*'>
    <label for="alt_text">Aggiungi testo altenativo</label>
    <input type="text" id="alt_text" name='alt_text' >
 
  </div>

  <div class="form-control mb-3 d-flex flex-column">
    <label for="description">Descrizione del piatto</label>
    <textarea name="description" id="descriprion"  rows="10"></textarea>
  </div>
 
  <a href="{{route('products.index')}}" class="btn btn-outline-secondary">Annulla</a>
  <button type="submit" class="btn btn-outline-primary">Crea</button>
</form>
  

@endsection