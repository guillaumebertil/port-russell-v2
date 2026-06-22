<x-layout class="mx-auto">
    <div class="card bg-base-100/90 w-sm md:w-2xl shadow-sm">
        <div class="card-body flex justify-center items-center">
            <h1 class="card-title text-4xl">Créer un utilisateur</h1>
            <form action="/users" method="POST" class="w-full flex flex-col items-center">
                @csrf
                {{-- Name --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Nom</legend>
                        <input
                            type="text"
                            name="name"
                            class="input w-full"
                            placeholder="John Doe"
                            value="{{ old('name') }}"
                        >
                    </fieldset>
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Email</legend>
                        <input
                            type="email"
                            name="email"
                            class="input w-full"
                            placeholder="john@example.com"
                            value="{{ old('email') }}"
                        >
                    </fieldset>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Mot de passe</legend>
                        <input
                            type="password"
                            name="password"
                            class="input w-full"
                            placeholder="******"
                            value=""
                        >
                    </fieldset>
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                
                {{-- Submit --}}
                <div class="w-full mt-4">
                    <button
                        type="submit"
                        class="btn btn-success w-full"
                    >
                        Créer
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>