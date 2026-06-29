<x-layout class="mx-auto">
    <div class="w-full flex flex-col items-center">
        <div class="text-accent-content">
            <h1 class="text-4xl font-bold">Dashboard</h1>
            <p class="text-xl">Bienvenue {{ auth()->user()->name }}</p>
        </div>

        <div class="w-full flex justify-center gap-x-8 mt-8">
            {{-- Catways --}}
            <div class="flex">
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure>
                        <x-heroicon-o-map class="w-48 h-48 mt-2"/>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title text-2xl">Catways</h2>
                        <div class="card-actions justify-end">
                        <a href="/catways" class="btn btn-primary">Gérer les catways</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Reservations --}}
            <div class="flex">
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure>
                        <x-heroicon-o-calendar-days class="w-48 h-48 mt-2"/>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title text-2xl">Reservations</h2>
                        <div class="card-actions justify-end">
                        <a href="/reservations" class="btn btn-primary">Gérer les réservations</a>
                        </div>
                    </div>
                </div>
            </div>
            @if (auth()->user()->isAdmin)
                {{-- Users --}}
                <div class="flex">
                    <div class="card bg-base-100 w-96 shadow-sm">
                        <figure>
                            <x-heroicon-o-user class="w-48 h-48 mt-2"/>
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title text-2xl">Utilisateurs</h2>
                            <div class="card-actions justify-end">
                            <a href="/users" class="btn btn-primary">Gérer les utilisateurs</a>
                        </div>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
</x-layout>