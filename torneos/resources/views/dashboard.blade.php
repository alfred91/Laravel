<x-mi-layout>
    <x-slot name="titulo"> Torneos
    </x-slot>

    <x-table>
        <x-slot name="tcabecera">
            <x-table.th>Nombre</x-table.th>

            <x-table.th>Juego</x-table.th>

            <x-table.th>Fecha Inicio</x-table.th>

            <x-table.th>1 Premio</x-table.th>

            <x-table.th>2 Premio</x-table.th>

            <x-table.th>Max participates</x-table.th>

        </x-slot>

        @foreach ($torneos as $torneo)

        <tr>
            <x-table.td>{{ $torneo -> nombre}}</x-table.td>
            <x-table.td>{{ $torneo -> juego}}</x-table.td>
            <x-table.td>{{ $torneo -> fechaIncio}}</x-table.td>
            <x-table.td>{{ $torneo -> premio}}</x-table.td>
            <x-table.td>{{ $torneo -> premio2}}</x-table.td>
            <x-table.td>{{ $torneo -> maxParticipantes}}</x-table.td>
        </tr>

        @endforeach

        <x-slot name="tlinks">
            {{ $torneos->links() }}
        </x-slot>
    </x-table>

</x-mi-layout>