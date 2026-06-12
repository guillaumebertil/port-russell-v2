<x-layout>
    <div>
        @foreach ($catways as $catway)
            <h2>Numéro: {{ $catway->catwayNumber }}</h2>
            <p>Type: {{ $catway->catwayType }}</p>
            <p>Etat: {{ $catway->catwayState }}</p>
        @endforeach
    </div>
</x-layout>