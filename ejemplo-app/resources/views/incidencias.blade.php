<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@heroicons/vue@1.0.4/dist/heroicons.js"></script>

</head>

<body class="bg-gray-100">
    <h2 class="text-3xl font-bold text-gray-800 mt-8 ml-8">Incidencias</h2>
    <h3 class="ml-8 mt-4">
        <a href="/incidencias/create" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium text-lg leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Crear incidencia</a>
    </h3>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Latitud</th>
                    <th scope="col" class="px-6 py-3">Longitud</th>
                    <th scope="col" class="px-6 py-3">Ciudad</th>
                    <th scope="col" class="px-6 py-3">Direccion</th>
                    <th scope="col" class="px-6 py-3">Descripcion</th>
                    <th scope="col" class="px-6 py-3">Estado</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incidencias as $incidencia)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4">{{$incidencia->latitud}}</td>
                    <td class="px-6 py-4">{{$incidencia->longitud}}</td>
                    <td class="px-6 py-4">{{$incidencia->ciudad}}</td>
                    <td class="px-6 py-4">{{$incidencia->direccion}}</td>
                    <td class="px-6 py-4">{{$incidencia->descripcion}}</td>
                    <td class="px-6 py-4">{{$incidencia->estado}}</td>
                    <td class="px-6 py-4">
                        <a href="/incidencias/{{$incidencia->id}}" class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m0 0h-1m1 0H7" />
                            </svg>
                        </a>
                        <a href="/incidencias/delete/{{$incidencia->id}}" class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>