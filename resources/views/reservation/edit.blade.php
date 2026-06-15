<x-layout class="mx-auto">
    <div class="card bg-base-100/90 w-sm md:w-2xl shadow-sm">
        <div class="card-body flex justify-center items-center">
            <h1 class="card-title text-4xl">Modifier une réservation</h1>
            <form action="/reservations/{{ $reservation->id }}" method="POST" class="w-full flex flex-col items-center">
                @csrf
                @method('PUT')
                {{-- Catway Number --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Numéro du catway:</legend>
                        <select
                            name="catwayNumber"
                            id="catwayNumber"
                            class="select w-full"
                        >
                            @foreach ($catways as $catway)
                                <option value="{{ $catway->catwayNumber }}" {{ $reservation->catwayNumber == $catway->catwayNumber ? 'selected' : '' }}>{{ $catway->catwayNumber }}</option>
                            @endforeach
                        </select>
                    </fieldset>
                    @error('catwayNumber')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Client Name --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Nom du client:</legend>
                        <input
                            type="text"
                            name="clientName"
                            class="input w-full"
                            value="{{ $reservation->clientName }}"
                        >
                    </fieldset>
                    @error('clientName')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Boat Name --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Nom du bateau:</legend>
                        <input
                            type="text"
                            name="boatName"
                            class="input w-full"
                            value="{{ $reservation->boatName }}"
                        >
                    </fieldset>
                    @error('boatName')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Start Date --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Date de début:</legend>
                        <input
                            type="date"
                            name="startDate"
                            class="input w-full"
                            value="{{ $reservation->startDate->format('Y-m-d') }}"
                        >
                    </fieldset>
                    @error('startDate')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                {{-- End Date --}}
                <div class="w-full">
                    <fieldset
                        class="fieldset"
                    >
                        <legend class="fieldset-legend">Date de fin:</legend>
                        <input
                            type="date"
                            name="endDate"
                            class="input w-full"
                            value="{{ $reservation->endDate->format('Y-m-d') }}"
                        >
                    </fieldset>
                    @error('endDate')
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