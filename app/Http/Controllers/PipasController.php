<?php

namespace App\Http\Controllers;

use App\Models\Pipas;
use Illuminate\Http\Request;

class PipasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pipas = Pipas::all(); // Corrección aquí
        return view('pipa.index', compact('pipas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pipas = new Pipas;
        $pipas->Color=$request->input('Color');
        $pipas->Material=$request->input('Material');
        $pipas->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Pipas $pipas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pipas = Pipas::find($id);
        return view('pipa.modal-info',compact('pipas'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $pipas = Pipas::find($id);
    $pipas->Color = $request->input('Color');
    $pipas->Material = $request->input('Material');
    $pipas->save(); // Guarda los cambios en la base de datos
    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pipas = Pipas::find($id);
        $pipas->delete();
        return redirect()->back();
        //
    }
}
