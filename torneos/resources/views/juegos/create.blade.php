<x-mi-layout>

    <x-slot name="titulo">
        Juegos
    </x-slot>

    <x-slot name="nuevo">
        {{ route('juegos.create') }}
    </x-slot>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('juegos.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Nombre -->
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <!-- Plataforma -->
            <div class="mt-4">
                <x-input-label for="plataforma" :value="__('Plataforma')" />
                <x-select-input id="plataforma" class="block mt-1 w-full" type="text" name="plataforma" :value="old('plataforma')" required autofocus autocomplete="plataforma">
                    <option value="PC">PC</option>
                    <option value="PS5">PS5</option>
                    <option value="XBOX">XBOX</option>
                    <option value="SWITCH">SWITCH</option>
                </x-select-input>
                <x-input-error :messages="$errors->get('plataforma')" class="mt-2" />
            </div>

            <!-- Edad    -->
            <div class="mt-4">
                <x-input-label for="edadR" :value="__('Edad recomendada')" />
                <x-text-input id="edadR" class="block mt-1 w-full" type="number" min="5" max="100" name="edadR" :value="old('edadR')" required autofocus autocomplete="edadR" />
                <x-input-error :messages="$errors->get('edadR')" class="mt-2" />
            </div>

            <!-- Nota -->
            <div class="mt-4">
                <x-input-label for="nota" :value="__('Nota')" />
                <x-text-input id="nota" class="block mt-1 w-full" min="1" max="10" type="number" name="nota" :value="old('nota')" required autofocus autocomplete="nota" />
                <x-input-error :messages="$errors->get('nota')" class="mt-2" />
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
