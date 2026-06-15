<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types= Type::all();
        return view('types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'name' => 'required|string|max:255',
        
        // Controlla che il colore sia HEX e che NON esista già nella tabella 'types' sotto la colonna 'color'
        'color' => [
            'required',
            'string',
            'hex_color',
            'unique:types,color' 
        ],
    ], [
        //  Compone il messaggio di errore per l'utente
        'color.unique' => 'Questo colore è già stato assegnato a un altro tipo. Scegline uno diverso.',
    ]);
        //altrimenti lo modifica
        $data=$request->all();

        // dd($data);
        $newType= new Type();
        $newType->name=$data['name'];
        $newType->color=$data['color'];

        $newType->save();
        return redirect()->route('types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    { 
        $data=$request->all();
        // controlla se il nuovo colore se diverso allora: Controlla che il colore sia HEX e che NON esista già nella tabella 'types' sotto la colonna 'color'
        if( $type->color!=$data['color']){

    
              $request->validate([
        'name' => 'required|string|max:255',
        
        // Controlla che il colore sia HEX e che NON esista già nella tabella 'products' sotto la colonna 'color'
        'color' => [
            'required',
            'string',
            'hex_color',
            'unique:types,color' 
        ],
    ], [
        // Compone il messaggio di errore per l'utente
        'color.unique' => 'Questo colore è già stato assegnato a un altro tipo. Scegline uno diverso.',
    ]);}else{
        // altrimenti lo modifica
        $type->name=$data['name'];
        $type->color=$data['color'];

        $type->update();

        return redirect()->route('types.index');
    }
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('types.index');
    }
}
