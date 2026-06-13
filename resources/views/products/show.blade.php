@extends('layouts.product')

@section('title','prodotto singolo')

@section('content')
<div class=" ">
<div class="card col-12 w-50 center" >
  <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->description}}</p>
    <a href="{{route('products.index')}}" class="btn btn-outline-primary">Torna ai prodotti</a>
    <a href="{{route('products.edit',$product)}}" class="btn btn-outline-warning">Torna ai prodotti</a>
  </div>
</div>
</div>
@endsection