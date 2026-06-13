@extends('layouts.product')

@section('title', 'Product')

@section('content')
<a class="btn btn-outline-primary" href="{{route('products.create')}}">Crea nuovo prodotto</a>
<div class="d-flex flex-wrap">
    <table class="table col-12">
        <thead>
            <tr scope="row">
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr scope="row">
                <th >{{$product->name}}</th>
                <th >{{$product->description}}</th>
                <th>
                <a class="btn btn-outline-primary" href="{{ route('products.show', $product) }}"><i
                                class="bi bi-eye"></i></a>
                </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
