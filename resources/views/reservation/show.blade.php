<x-layout>
    <div>
        <h2>Numéro de la réservation: {{ $reservation->id }}</h2>
        <p>Numéro du catway: {{ $reservation->catwayNumber }}</p>
        <p>Nom du client: {{ $reservation->clientName }}</p>
        <p>Nom du bateau: {{ $reservation->boatName }}</p>
        <p>Date de début: {{ $reservation->startDate->format('d/m/Y') }}</p>
        <p>Date de fin: {{ $reservation->endDate->format('d/m/Y') }}</p>
        
        <a href="">Modifier</a>
        <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-error">Supprimer</button>
        </form>
    </div>
</x-layout>