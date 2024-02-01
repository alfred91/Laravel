<x-web-layout>

    <x-slot name="titulo">
        INSCRIPCIONES DEL USUARIO
    </x-slot>

    @foreach ($torneos as $torneo)
    <x-card>
        <x-slot name="titulo">
            {{ $torneo->nombre }}
        </x-slot>
        <x-slot name="imagen">
            {{ asset('storage/torneo_' . $torneo->id . '.jpg') }}
        </x-slot>
        <x-slot name="descripcion">

            <p>Juego: {{ $torneo->juego->nombre }}</p>
            <p>Fecha inicio: {{ $torneo->fechaInicio }}</p>
            <p>Primer premio: {{ $torneo->premio1 }}€</p>
            <p>Segundo premio: {{ $torneo->premio2 }}€</p>
            <p>Máximo de participantes: {{ $torneo->maxParticipantes }}</p>
        </x-slot>
        <x-slot name="boton">
            <a href="{{ route('web.torneos_detalle', ['id' => $torneo->id]) }}">Ver detalle</a>
        </x-slot>
    </x-card>
    @endforeach

</x-web-layout>
