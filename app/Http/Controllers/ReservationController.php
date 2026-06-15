<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Catway;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('reservation.index', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catways = Catway::all();

        return view('reservation.create', [
            'catways' => $catways,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        $validated = $request->validated();

        Reservation::create($validated);

        return redirect('/reservations');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $reservation = Reservation::find($id);

        return view('reservation.show', [
            'reservation'   => $reservation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $reservation = Reservation::find($id);

        $catways = Catway::all();

        return view('reservation.edit', [
            'reservation' => $reservation,
            'catways'     => $catways
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, int $id)
    {
        $validated = $request->validated();

        $reservation = Reservation::find($id);

        $reservation->update($validated);

        return redirect('/reservations');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $reservation = Reservation::find($id);

        $reservation->delete();

        return redirect('/reservations');
    }
}
