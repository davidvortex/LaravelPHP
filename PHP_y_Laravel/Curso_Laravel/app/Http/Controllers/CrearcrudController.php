<?php

namespace App\Http\Controllers;

use App\Models\crearcrud;
use App\Http\Requests\StorecrearcrudRequest;
use App\Http\Requests\UpdatecrearcrudRequest;
use App\Models\Indexcrud;
use Illuminate\Http\Request;

class CrearcrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Indexcrud::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('indexcruds.index')->with('success', 'Registro creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(crearcrud $crearcrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(crearcrud $crearcrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecrearcrudRequest $request, crearcrud $crearcrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crearcrud $crearcrud)
    {
        //
    }
}
