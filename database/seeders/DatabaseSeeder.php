<?php

namespace Database\Seeders;

use App\Models\Catway;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $jsonCatways = file_get_contents(database_path('data/catways.json'));
        $catways = json_decode($jsonCatways, false);

        foreach ($catways as $catway) {
            Catway::create([
                'catwayNumber'  => $catway->catwayNumber,
                'catwayType'    => $catway->catwayType,
                'catwayState'   => $catway->catwayState,
            ]);
        }

        $jsonReservations = file_get_contents(database_path('data/reservations.json'));
        $reservations = json_decode($jsonReservations, false);

        foreach ($reservations as $reservation) {
            Reservation::create([
                'catwayNumber'  => $reservation->catwayNumber,
                'clientName'    => $reservation->clientName,
                'boatName'      => $reservation->boatName,
                'startDate'     => Carbon::parse($reservation->startDate, 'UTC'),
                'endDate'       => Carbon::parse($reservation->endDate, 'UTC'),
            ]);
        }
    }
}