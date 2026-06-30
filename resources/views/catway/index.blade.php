<x-layout>
    <div>
        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <tr>
                    <th>Numéro</th>
                    <th>Type</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
                @foreach ($catways as $catway)
                    <tr>
                        <td>{{ $catway->catwayNumber }}</td>
                        <td>{{ $catway->catwayType }}</td>
                        <td>{{ $catway->catwayState }}</td>
                        <td><a href="/catways/{{ $catway->id }}" class="btn btn-success">Infos</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="overflow-x-auto text-center my-8">
            <a href="/catways/add" class="btn btn-success">Ajouter un catway</a>
        </div>
    </div>
</x-layout>

{{-- <x-layout>
    <div>
        @foreach ($catways as $catway)
            <h2>Numéro: {{ $catway->catwayNumber }}</h2>
            <p>Type: {{ $catway->catwayType }}</p>
            <p>Etat: {{ $catway->catwayState }}</p>
            <a href="/catways/{{ $catway->id }}" class="btn">Infos</a>
        @endforeach
    </div>
</x-layout> --}}