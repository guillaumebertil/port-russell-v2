<x-layout>
    <div class="card bg-base-100/90 w-lg shadow-sm">
        <div class="card-body flex justify-center items-center">
            <h1 class="card-title text-4xl">Reservation n° {{ $reservation->id }}</h1>
            <p><span class="text-xl font-semibold">Nom du client:</span> {{ $reservation->clientName }}</p>
            <p><span class="text-xl font-semibold">Nom du bateau:</span> {{ $reservation->boatName }}</p>
            <p><span class="text-xl font-semibold">Date de départ:</span> {{ $reservation->startDate->format('d/m/Y') }}</p>
            <p><span class="text-xl font-semibold">Date de d'arrivée:</span> {{ $reservation->endDate->format('d/m/Y') }}</p>
            <p><span class="text-xl font-semibold">Date de création:</span> {{ $reservation->created_at->format('d/m/Y') }}</p>
            <p><span class="text-xl font-semibold">Date de modification:</span> {{ $reservation->updated_at->format('d/m/Y') }}</p>
            <div class="flex w-full justify-center gap-x-8">
                <a href="/reservations/edit/{{ $reservation->id }}" class="btn btn-success w-[1/2]">Modifier</a>
                <form action="/reservations/{{ $reservation->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-error w-[1/2]">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

{{-- <div>
    <h2>Numéro de la réservation: {{ $reservation->id }}</h2>
    <p>Numéro du reservation: {{ $reservation->reservationNumber }}</p>
    <p>Nom du client: {{ $reservation->clientName }}</p>
    <p>Nom du bateau: {{ $reservation->boatName }}</p>
    <p>Date de début: {{ $reservation->startDate->format('d/m/Y') }}</p>
    <p>Date de fin: {{ $reservation->endDate->format('d/m/Y') }}</p>
    
    <a href="/reservations/edit/{{ $reservation->id }}">Modifier</a>
    <form action="/reservations/{{ $reservation->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-error">Supprimer</button>
    </form>
</div> --}}