<?php

namespace App\Services;

use App\Models\Reservation;

class ReservationService
{
    public function isAvailable(int $catwayNumber, string $startDate, string $endDate, ?string $excludeId = null): bool
    {
        $reservation = Reservation::where('catwayNumber', $catwayNumber)
            ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
            ->where('startDate', '<', $endDate)
            ->where('endDate', '>', $startDate)
            ->exists();

            return !$reservation;
    }
}