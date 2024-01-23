<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                 
                    


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Juego
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fecha Inicio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    1º Premio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    2º Premio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Max Participantes
                                </th>
                                
                            </tr>
                        </thead>
                        @foreach ($torneos as $torneo)
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $torneo -> nombre}}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $torneo -> juego}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo -> fechaIncio}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo -> premio}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo -> premio2}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo -> maxParticipantes}}
                                </td>
                            </tr>
                        </tbody
                
                

            </div>
            {{ $torneos -> links() }}
        </div>
    </div>
</x-app-layout>