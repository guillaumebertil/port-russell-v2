<x-layout class="mx-auto">
    <div class="card bg-base-100/90 w-sm md:w-2xl shadow-sm">
        <div class="card-body flex justify-center items-center">
            <h1 class="card-title text-4xl">Connexion</h1>
            <form action="/login" method="POST" class="w-full flex flex-col items-center">
                @csrf

                {{-- User email --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Adresse email:</legend>
                        <input
                            type="email"
                            name="email"
                            class="input w-full"
                            placeholder="john@example.com"
                            value=""
                        >
                    </fieldset>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- User password --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Mot de passe:</legend>
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
                        Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>