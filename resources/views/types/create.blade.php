@extends('layouts.type')

@section('title','Crea')

@section('content')
    <form action="{{route('types.store')}}" method="POST">

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Inserisci il nome del nuovo tipo</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Scegli il colore</label>
            <input type="color" name="color" id="color" >
            @error('color')
                 <div style="color: red; font-size: 14px; margin-top: 5px; font-weight: bold;">
                {{ $message }}
            </div>
            @enderror
        </div>

        <a href="{{route('types.index')}}" class="btn btn-outline-secondary">Annulla</a>
        <button class="btn btn-outline-primary">Crea nuovo tipo</button>
    </form>
@endsection