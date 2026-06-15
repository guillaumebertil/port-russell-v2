<x-layout>
    <div>
        <a href="/reservations/add">Ajouter une réservation</a>
    </div>
    <div>
        @foreach ($reservations as $reservation)
            <h2>Numéro de la réservation: {{ $reservation->id }}</h2>
            <p>Numéro du catway: {{ $reservation->catwayNumber }}</p>
            <p>Nom du client: {{ $reservation->clientName }}</p>
            <p>Nom du bateau: {{ $reservation->boatName }}</p>
            <p>Date de départ: {{ $reservation->startDate }}</p>
            <p>Date d'arrivée: {{ $reservation->endDate }}</p>
            <p>Date de création: {{ $reservation->created_at->format('d/m/Y') }}</p>
        @endforeach
    </div>
</x-layout>