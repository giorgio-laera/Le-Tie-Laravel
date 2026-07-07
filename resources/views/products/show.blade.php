@extends('layouts.product')

@section('title', 'prodotto singolo')

@section('content')
    <div class=" ">
        <div class="card col-12 w-50 center">
            @if (!is_null($product->image))
                <img src="{{ asset('storage/' . $product->image->path) }}" class="card-img-top"
                    alt="{{ $product->image->alt_text }}">
            @endif
            {{-- @dd($product->image->alt_text) --}}
            <div class="card-body">
                {{-- @dd($product->image) --}}
                <h5 class="card-title">Nome: {{ $product->name }}</h5>
                <p class="card-text">Tipologia: {{ $product->type['name'] }}</p>
                <p class="card-text">Categorie:
                    {{-- @dd($product->categories) --}}
                    @foreach ($product->categories as $category)
                        <span> {{ $category->name }}</span>
                    @endforeach
                </p>
                <p class="card-text">Descrizione: {{ $product->description }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Torna ai prodotti</a>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-warning">Modifica</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal-{{ $product->id }}">
                    Elimina
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal-{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il prodotto?
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <input class="btn btn-outline-danger" type="submit" value="Elimina definitivamente">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
