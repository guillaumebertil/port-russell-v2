<x-layout>
    <div class="card bg-base-100/90 w-lg shadow-sm">
        <div class="card-body flex justify-center items-center">
            <h1 class="card-title text-4xl">Catway n° {{ $catway->catwayNumber }}</h1>
            <p><span class="text-xl font-semibold">Type:</span> {{ $catway->catwayType }}</p>
            <p><span class="text-xl font-semibold">Etat:</span> {{ $catway->catwayState }}</p>
            @foreach ($reservations as $reservation)
                <p>{{ $reservation->boatName }}</p>
            @endforeach
            <div class="flex w-full justify-center gap-x-8">
                <a href="/catways/edit/{{ $catway->id }}" class="btn btn-success w-[1/2]">Modifier</a>
                <form action="/catways/{{ $catway->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-error w-[1/2]">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>