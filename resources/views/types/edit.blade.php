@extends('layouts.type')

@section('title','Modifica ')

@section('content')
    <form action="{{route('types.update', $type)}}" method="POST">
        @csrf
        @method('put')

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Modifica il nome del tipo</label>
            <input type="text" name="name" id="name" value="{{$type->name}}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Scegli nuovo colore</label>
            <input type="color" name="color" id="color" value="{{$type->color}}">
                        @error('color')
                 <div style="color: red; font-size: 14px; margin-top: 5px; font-weight: bold;">
                {{ $message }}
            </div>
            @enderror
        </div>
        <a href="{{route('types.index')}}" class="btn btn-outline-secondary">Annulla</a>
        <button class="btn btn-outline-primary">Modifica</button>
    </form>
@endsection