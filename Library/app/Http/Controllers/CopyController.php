<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use Illuminate\Http\Request;

class CopyController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $copies = response()->json(Copy::all());
        return $copies;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $copy = new Copy();
        $copy->book_id = $request->book_id;
        $copy->hardcovered = $request->hardcovered;
        $copy->publication = $request->publication;
        $copy->status = $request->status;
        $copy->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $copies = response()->json(Copy::find($id));
        return $copies;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $copy = Copy::find($id);
        $copy->book_id = $request->book_id;
        $copy->hardcovered = $request->hardcovered;
        $copy->publication = $request->publication;
        $copy->status = $request->status;
        $copy->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Copy::find($id)->delete();
    }
}
