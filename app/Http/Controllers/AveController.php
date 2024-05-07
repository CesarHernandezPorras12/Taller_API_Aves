<?php

namespace App\Http\Controllers;
use App\Models\Ave;
use Illuminate\Http\Request;

class AveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ave::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'integer'],
            'categoria_id' => ['required', 'integer'],
        ]);
        return response()->json($validatedData, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ave = Ave::findOrFail($id);
        $categoria = $ave->categoria;
    
        return response()->json([
            'ave' => $ave,
            'categoria' => $categoria,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ave $ave)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'integer'],
            'categoria_id' => ['required', 'integer'],
        ]);
        return response()->json($validatedData, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ave $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
