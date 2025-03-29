<?php

namespace App\Http\Controllers;

use App\Models\showcrud;
use App\Http\Requests\StoreshowcrudRequest;
use App\Http\Requests\UpdateshowcrudRequest;
use App\Models\Indexcrud;

class ShowcrudController extends Controller
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
    public function store(StoreshowcrudRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $indexcrud = Indexcrud::findOrFail($id);
        return view('Crud.show', compact('indexcrud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(showcrud $showcrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateshowcrudRequest $request, showcrud $showcrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(showcrud $showcrud)
    {
        //
    }
}
