<x-layout>
    <div>
        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <tr>
                    <th>Numéro de la réservation</th>
                    <th>Numéro du catway</th>
                    <th>Nom du client</th>
                    <th>Nom du bateau</th>
                    <th>Date de départ</th>
                    <th>Date d'arrivée</th>
                    <th>Date de création</th>
                </tr>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->catwayNumber }}</td>
                        <td>{{ $reservation->clientName }}</td>
                        <td>{{ $reservation->boatName }}</td>
                        <td>{{ $reservation->startDate->format('d/m/Y') }}</td>
                        <td>{{ $reservation->endDate->format('d/m/Y') }}</td>
                        <td>{{ $reservation->created_at->format('d/m/Y') }}</td>
                        <td><a href="/reservations/{{ $reservation->id }}" class="btn btn-success">Infos</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="overflow-x-auto text-center my-8">
            <a href="/reservations/add" class="btn btn-success">Ajouter une reservation</a>
        </div>
    </div>
</x-layout>