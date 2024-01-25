<x-mi-layout>

    <x-slot name="titulo">
        TORNEOS
    </x-slot>

    <x-slot name="nuevo">
        {{ route('torneos.create') }}
    </x-slot>

    <x-table>
        <x-slot name="tcabecera">
            <x-table.th>Nombre</x-table.th>
            <x-table.th>Juego</x-table.th>
            <x-table.th>Fecha de Inicio</x-table.th>
            <x-table.th>Primer premio</x-table.th>
            <x-table.th>Segundo premio</x-table.th>
            <x-table.th>Máximo de participantes</x-table.th>
        </x-slot>

        @foreach ($torneos as $torneo)
            <tr>
                <x-table.td>{{ $torneo->nombre }}</x-table.td>
                <x-table.td>{{ $torneo->juego }}</x-table.td>
                <x-table.td>{{ $torneo->fechaInicio }}</x-table.td>
                <x-table.td>{{ $torneo->premio1 }}</x-table.td>
                <x-table.td>{{ $torneo->premio2 }}</x-table.td>
                <x-table.td>{{ $torneo->maxParticipantes }}</x-table.td>
            </tr>
        @endforeach

        <x-slot name="tlinks">
            {{ $torneos->links() }}
        </x-slot>

    </x-table>


</x-mi-layout>
