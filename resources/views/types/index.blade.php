@extends('layouts.type')

@section('title','Tipi')
    
@section('content')
<a class="btn btn-outline-primary" href="{{route('types.create')}}">Crea nuovo tipo</a>
<div class="d-flex flex-wrap">
    <table class="table col-12">
        <thead>
            <tr scope="row">
                <th scope="col">Nome</th>
                <th scope="col">Colore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr scope="row">
                <th >{{$type->name}}</th>
                <th style="background-color: {{$type->color}} "></th>
                
                <th>
                    <a class="btn btn-outline-warning" href="{{ route('types.edit', $type) }}"><i
                                class="bi bi-pencil"></i></a>
                </th>
                <th>
                                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal-{{$type->id}}">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                </th>
                </tr>
                    <div class="modal fade" id="deleteModal-{{$type->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <form action="{{ route('types.destroy', $type) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <input class="btn btn-outline-danger" type="submit" value="Elimina definitivamente">
                    </form>
                </div>
            </div>
        </div>
    </div>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection