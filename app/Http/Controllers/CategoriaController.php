<?php

namespace App\Http\Controllers;

use App\Models\ModelCategoria;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoriaRequest; 

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ModelCategoria::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = ModelCategoria::create($request->validated());
        return response()->json($categoria, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = ModelCategoria::findOrFail($id);
        $aves = $categoria->Aves()->get();

        return response()->json([
            'categorias' => $categoria,
            'aves' => $aves
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, string $id)
    {
        $categoria = ModelCategoria::findOrFail($id);
        $categoria->update($request->validated());
        return response()->json($categoria);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = ModelCategoria::findOrFail($id);
        $categoria->delete();
        return response()->json(null, 204);

    }
}
