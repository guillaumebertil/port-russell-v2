<x-layout class="mx-auto">
    <div class="card bg-base-100/90 w-2xl shadow-sm">
        <div class="card-body flex justify-center items-center">
            <h1 class="card-title text-4xl">Modifier un catway</h1>
            <form action="/catways/{{ $catway->id }}" method="POST" class="w-full flex flex-col items-center">
                @csrf
                @method('PUT')

                {{-- Catway Number --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Numéro du catway:</legend>
                        <input
                            type="text"
                            name="catwayNumber"
                            class="input w-full"
                            placeholder="{{ $catway->catwayNumber }}"
                            value="{{ $catway->catwayNumber }}"
                        >
                    </fieldset>
                    @error('catwayNumber')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Catway Type --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Type du catway:</legend>
                        <select
                            name="catwayType"
                            id="catwayType"
                            class="select w-full"
                        >
                            <option value="">--- Choisir un type ---</option>
                            <option value="short" {{ $catway->catwayType == 'short' ? 'selected' : '' }}>Short</option>
                            <option value="long" {{ $catway->catwayType == 'long' ? 'selected' : '' }}>Long</option>
                        </select>
                    </fieldset>
                    @error('catwayType')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- catwayState --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Etat du catway:</legend>
                        <textarea
                            name="catwayState"
                            id="catwayState"
                            rows="4"
                            class="textarea w-full"
                            placeholder="Décrivez l'état du catway"
                        >{{ $catway->catwayState }}</textarea>
                    </fieldset>
                    @error('catwayState')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="w-full mt-4">
                    <button
                        type="submit"
                        class="btn btn-success w-full"
                    >
                        Modifier
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>