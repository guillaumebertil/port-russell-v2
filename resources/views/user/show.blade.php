<x-layout>
    <div>
        <h2>Nom {{ $user->name }}</h2>
        <p>Email: {{ $user->email }}</p>
        <a href="/users/edit/{{ $user->id }}">Modifier</a>
        {{-- <form action="/users/{{ $user->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-error">Supprimer</button>
        </form> --}}
    </div>
</x-layout>