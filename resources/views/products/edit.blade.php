@extends('layouts.product')

@section('title', 'Modifica progetto')

@section('content')
    <form class="" action="{{route('products.update', $product)}}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('put')
  <div class=" form-control mb-3 d-flex flex-column">
    <label for="name">Nome del piatto</label>
    <input type="text" class="form-control" value="{{$product->name}}" id="name" name="name">
   
  </div>
 <div class="form-control mb-3 dfle flex-column">
    <label for="">Seleziona la tipologia</label>
    <div>
    @foreach ($types as $type)

    <input type="radio" id="{{$type->name}}" value="{{$type->id}}" name="type" @checked($type->id == $product->type_id)>
    <label for="{{$type->name}}">{{$type->name}}</label>
    @endforeach
    </div>
  </div>

   <div class="form-control mb-3 dfle flex-column">
    <label for="">Seleziona le categorie</label>
    <div>
       @foreach ($categories as $category)
      
    <input type="checkbox" id="{{$category->name}}" value="{{$category->id}}" name="categories[]" @checked(in_array($category->id, $checkCategory))>
    <label for="{{$category->name}}">{{$category->name}}</label>
    @endforeach
        </div>
  </div>
     <div class="form-control mb-3 d-flex flex-column">
    
    <label for="img ">Modifica immagine</label>
    <div class="d-flex mt-3">
    <input type="file" id="img" name='img' accept='image/*'>
    @if (!is_null($product->image))
        
    <img class="w-25 h-25 figure-img img-fluid rounded" src="{{asset("storage/".$product->image->path)}}" alt="">
    @endif
     </div> 
    <label for="alt_text">Modifica testo altenativo</label>
    <input type="text" id="alt_text" name='alt_text' value="@if(!is_null($product->image)){{ $product->image->alt_text}} @endif" />

  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="description">Descrizione del piatto</label>
    <textarea name="description" id="descriprion"  rows="10">{{$product->description}}</textarea>
  </div>

    <a href="{{route('products.show',$product)}}" class="btn btn-outline-secondary">Annulla</a>
  <button type="submit" class="btn btn-primary">Modifica</button>
</form>
@endsection