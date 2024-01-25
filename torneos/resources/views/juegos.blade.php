<x-mi-layout>

    <x-slot name="titulo">
        JUEGOS
    </x-slot>

    <x-slot name="nuevo">
        {{ route('juegos.create') }}
    </x-slot>

    <x-table>
        <x-slot name="tcabecera">
            <x-table.th>Nombre</x-table.th>
            <x-table.th>Plataforma</x-table.th>
            <x-table.th>Edad Recomendada</x-table.th>
            <x-table.th>Nota</x-table.th>
        </x-slot>

        @foreach ($juegos as $juego)
        <tr>
            <x-table.td>{{ $juego->nombre }}</x-table.td>
            <x-table.td>{{ $juego->plataforma }}</x-table.td>
            <x-table.td>{{ $juego->edadR }}</x-table.td>
            <x-table.td>{{ $juego->nota }}</x-table.td>

        </tr>
        @endforeach

        <x-slot name="tlinks">
            {{ $juegos->links() }}
        </x-slot>

    </x-table>


</x-mi-layout>