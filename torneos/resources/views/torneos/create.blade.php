<x-mi-layout>

    <x-slot name="titulo">
        TORNEOS
    </x-slot>

    <x-slot name="nuevo">
        {{ route('torneos.create') }}
    </x-slot>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('torneos.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Nombre -->
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <!-- Juego -->
            <div class="mt-4">
                <x-input-label for="juego" :value="__('Juego')" />
                <x-select-input id="juego" class="block mt-1 w-full" type="select" name="juego" :value="old('juego')" required autofocus autocomplete="juego">
                    @foreach($juegos as $juego)
                    <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('juego')" class="mt-2" />
            </div>

            <!-- Fecha Inicio    -->
            <div class="mt-4">
                <x-input-label for="fechaInicio" :value="__('Fecha Inicio')" />
                <x-text-input id="fechaInicio" class="block mt-1 w-full" type="date" name="fechaInicio" :value="old('fechaInicio')" required autofocus autocomplete="fechaInicio" />
                <x-input-error :messages="$errors->get('fechaInicio')" class="mt-2" />
            </div>

            <!-- Premio1 -->
            <div class="mt-4">
                <x-input-label for="premio1" :value="__('Primer premio')" />
                <x-text-input id="premio1" class="block mt-1 w-full" type="number" name="premio1" :value="old('premio1')" required autofocus autocomplete="premio1" />
                <x-input-error :messages="$errors->get('premio1')" class="mt-2" />
            </div>

            <!-- Premio1 -->
            <div class="mt-4">
                <x-input-label for="premio2" :value="__('Segundo premio')" />
                <x-text-input id="premio2" class="block mt-1 w-full" type="number" name="premio2" :value="old('premio2')" required autofocus autocomplete="premio2" />
                <x-input-error :messages="$errors->get('premio2')" class="mt-2" />
            </div>

            <!-- MaxParticipantes -->
            <div class="mt-4">
                <x-input-label for="maxParticipantes" :value="__('Número máximo de participantes')" />
                <x-text-input id="maxParticipantes" class="block mt-1 w-full" type="number" name="maxParticipantes" :value="old('maxParticipantes')" required autocomplete="maxParticipantes" />
                <x-input-error :messages="$errors->get('maxParticipantes')" class="mt-2" />
            </div>

            <!-- Imagen -->
            <div class="mt-4">
                <x-input-label for="imagen" :value="__('Imagen')" />
                <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" :value="old('imagen')" required />
                <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Crear') }}
                </x-primary-button>
            </div>

        </form>
    </div>


</x-mi-layout>
