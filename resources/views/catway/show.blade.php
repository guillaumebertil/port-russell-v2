<x-layout>
    <div>
        <h2>Numéro: {{ $catway->catwayNumber }}</h2>
        <p>Type: {{ $catway->catwayType }}</p>
        <p>Etat: {{ $catway->catwayState }}</p>
        @foreach ($reservations as $reservation)
            <p>{{ $reservation->boatName }}</p>
        @endforeach
        <a href="/catways/edit/{{ $catway->id }}">Modifier</a>
        <form action="/catways/{{ $catway->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-error">Supprimer</button>
        </form>
    </div>
</x-layout>