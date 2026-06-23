<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCatwayRequest;
use App\Http\Requests\UpdateCatwayRequest;
use App\Models\Catway;

class CatwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catways = Catway::all();

        return view('catway.index', [
            'catways' => $catways,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catway.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCatwayRequest $request)
    {
        $validated = $request->validated();

        Catway::create($validated);

        return redirect('/catways');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $catway = Catway::find($id);

        $reservations = $catway->reservations;

        return view('catway.show', [
            'catway' => $catway,
            'reservations' => $reservations
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $catway = Catway::find($id);

        return view('catway.edit', [
            'catway' => $catway,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatwayRequest $request, string $id)
    {
        $validated = $request->validated();

        $catway = Catway::find($id);

        $catway->update($validated);

        return redirect('/catways');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catway = Catway::find($id);

        $catway->delete();

        return redirect('/catways');
    }
}
