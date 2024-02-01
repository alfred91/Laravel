<x-web-layout>

    <x-slot name="titulo">
        JUEGO {{ $juego->nombre }}
    </x-slot>

    <x-detalle>
        <x-slot name='fecha'>
            Edad recomendada: {{ $juego->edadR }}
        </x-slot>
        <x-slot name='juego'>
            Plataforma: {{ $juego->plataforma }}
        </x-slot>
        <x-slot name='imagen'>
            {{ asset('storage/juego_' . $juego->id . '.jpg') }}
        </x-slot>

        <div class="flex">
            @for ($i = 0; $i < $juego->nota; $i++)
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-700">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                </svg>
                @endfor
        </div>

        <h3 class="block my-3 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-inherit">

            Torneos de este juego
        </h3>
        <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
            <nav class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
                @foreach( $juego->torneos as $torneo)
                <a href="{{ route('web.torneos_detalle', ['id' => $torneo->id]) }}" class="text-initial">
                    <div role="button" class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                        {{ $torneo->nombre }}
                    </div>
                </a>
                @endforeach
            </nav>
        </div>

    </x-detalle>
</x-web-layout>
