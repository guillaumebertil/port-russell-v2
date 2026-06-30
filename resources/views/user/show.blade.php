<x-layout>
    <div class="card bg-base-100/90 w-lg shadow-sm">
        <div class="card-body flex justify-center items-center">
            <h1 class="card-title text-4xl">Utilisateur n° {{ $user->id }}</h1>
            <p><span class="text-xl font-semibold">Nom:</span> {{ $user->name }}</p>
            <p><span class="text-xl font-semibold">Email:</span> {{ $user->email }}</p>
            <p><span class="text-xl font-semibold">Rôle:</span> @if ($user->isAdmin)
                                <span class="text-red-500">Admin</span>
                                @else
                                    <span>User</span>
                            @endif</p>
            <div class="flex w-full justify-center gap-x-8">
                <a href="/users/edit/{{ $user->id }}" class="btn btn-success w-[1/2]">Modifier</a>
                <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-error w-[1/2]">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>