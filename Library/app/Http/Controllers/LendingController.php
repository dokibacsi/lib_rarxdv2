<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;

class LendingController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lendings = response()->json(Lending::all());
        return $lendings;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lending = new Lending();
        $lending->copy_id = $request->copy_id;
        $lending->user_id = $request->user_id;
        $lending->start = $request->start;
        $lending->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lendings = response()->json(Lending::find($id));
        return $lendings;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lending = Lending::find($id);
        $lending->copy_id = $request->copy_id;
        $lending->user_id = $request->user_id;
        $lending->start = $request->start;
        $lending->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lending::find($id)->delete();
    }
}
