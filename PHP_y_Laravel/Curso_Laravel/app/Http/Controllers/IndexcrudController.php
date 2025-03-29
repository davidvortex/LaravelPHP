<?php

namespace App\Http\Controllers;

use App\Models\Indexcrud;
use Illuminate\Http\Request;

class IndexcrudController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $indexcruds = Indexcrud::all();  // Obtén todos los registros de la base de datos
        return view('Crud.index', compact('indexcruds'));  // Pasa los registros a la vista
    }

    // Mostrar el formulario para crear un nuevo registro
    public function create()
    {
        return view('Crud.create');  // La vista que tiene el formulario para agregar un nuevo registro
    }

    // Almacenar un nuevo registro en la base de datos
    public function store(Request $request)
    {
        // Valida los datos entrantes
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:500',
        ]);

        // Crear el nuevo registro
        Indexcrud::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigir al índice con un mensaje de éxito
        return redirect()->route('Crud.index')->with('success', 'Registro creado exitosamente');
    }

    // Mostrar un solo registro
    public function show($id)
    {
        $indexcrud = Indexcrud::findOrFail($id);  // Encuentra el registro por ID o lanza un error
        return view('Crud.show', compact('indexcrud'));  // Pasa el registro a la vista de mostrar
    }
}
