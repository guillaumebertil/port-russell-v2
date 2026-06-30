<x-layout>
    <div>
        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>@if ($user->isAdmin)
                                <span class="text-red-500">Admin</span>
                                @else
                                    <span>User</span>
                            @endif
                        </td>
                        <td><a href="/users/{{ $user->id }}" class="btn btn-success">Infos</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="overflow-x-auto text-center my-8">
            <a href="/users/add" class="btn btn-success">Ajouter un utilisateur</a>
        </div>
    </div>
</x-layout>