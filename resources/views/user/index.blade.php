<x-layout>
    <div>
        @foreach ($users as $user)
            <h2>Nom: {{ $user->name }}</h2>
            <p>Email: {{ $user->email }}</p>
        @endforeach
    </div>
</x-layout>