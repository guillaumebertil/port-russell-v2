<x-layout>
    <div>
        <h2>Numéro: {{ $catway->catwayNumber }}</h2>
        <p>Type: {{ $catway->catwayType }}</p>
        <p>Etat: {{ $catway->catwayState }}</p>
        @foreach ($reservations as $reservation)
            <p>{{ $reservation->boatName }}</p>
        @endforeach
    </div>
</x-layout>