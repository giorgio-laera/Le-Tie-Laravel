@extends('layouts.product')

@section('title','prodotto singolo')

@section('content')
<div class=" ">
<div class="card col-12 w-50 center" >
  @if (!is_null($product->image))
  <img src="{{asset("storage/".$product->image->path)}}" class="card-img-top" alt="{{$product->image->alt_text}}">
  @endif
  {{-- @dd($product->image->alt_text) --}}
  <div class="card-body">
    {{-- @dd($product->image) --}}
    <h5 class="card-title">Nome: {{$product->name}}</h5>
    <p class="card-text">Tipologia: {{$product->type['name']}}</p>
    <p class="card-text">Categorie: 
      {{-- @dd($product->categories) --}}
      @foreach ($product->categories as $category)
          <span> {{$category->name}}</span>
      @endforeach</p>
    <p class="card-text">Descrizione: {{$product->description}}</p>
    <a href="{{route('products.index')}}" class="btn btn-outline-primary">Torna ai prodotti</a>
    <a href="{{route('products.edit',$product)}}" class="btn btn-outline-warning">Modifica</a>
  </div>
</div>
</div>
@endsection