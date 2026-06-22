<x-layout>
    <div>
        @foreach ($users as $user)
            <h2>Nom: {{ $user->name }}</h2>
            <p>Email: {{ $user->email }}</p>
            <a href="/users/{{ $user->id }}" class="btn">Info</a>
        @endforeach
    </div>

    <a href="/users/create">Ajouter un utilisateur</a>
</x-layout>