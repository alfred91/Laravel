<x-mi-layout>

    <x-slot name="titulo">
        USUARIOS
    </x-slot>


    <x-table>
        <x-slot name="tcabecera">
            <x-table.th>Nombre</x-table.th>
            <x-table.th>Email</x-table.th>
            <x-table.th>Ciudad</x-table.th>
            <x-table.th>Nick</x-table.th>
            <x-table.th>Juego Preferido</x-table.th>
            <x-table.th>Rol</x-table.th>
        </x-slot>

        @foreach ($usuarios as $usuario)
        <tr>
            <x-table.td>{{ $usuario->name }}</x-table.td>
            <x-table.td>{{ $usuario->email }}</x-table.td>
            <x-table.td>{{ $usuario->ciudad }}</x-table.td>
            <x-table.td>{{ $usuario->nick }}</x-table.td>
            <x-table.td>{{ $usuario->juegoPreferido }}</x-table.td>
            <x-table.td>{{ $usuario->rol }}</x-table.td>
        </tr>
        @endforeach

        <x-slot name="tlinks">
            {{ $usuarios->links() }}
        </x-slot>

    </x-table>


</x-mi-layout>