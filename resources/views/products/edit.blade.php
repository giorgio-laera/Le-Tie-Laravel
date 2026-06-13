@extends('layouts.product')

@section('title', 'Modifica progetto')

@section('content')
    <form class="col-8" action="{{route('products.update', $product)}}" method="POST">
        @csrf
        @method('put')
  <div class="form-control mb-mì3 d-flex flex-column">
    <label for="name">Nome del piatto</label>
    <input type="text" class="form-control" value="{{$product->name}}" id="name" name="name">
   
  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="description">Descrizione del piatto</label>
    <textarea name="description" id="descriprion"  rows="10">{{$product->description}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection