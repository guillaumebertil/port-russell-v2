<x-layout>
    <div>
        @foreach ($catways as $catway)
            <h2>Numéro: {{ $catway->catwayNumber }}</h2>
            <p>Type: {{ $catway->catwayType }}</p>
            <p>Etat: {{ $catway->catwayState }}</p>
            <a href="/catways/{{ $catway->id }}" class="btn">Infos</a>
        @endforeach
    </div>
</x-layout>