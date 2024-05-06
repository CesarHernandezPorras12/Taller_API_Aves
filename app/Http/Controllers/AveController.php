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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ave $ave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ave $ave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ave $ave)
    {
        //
    }
}
