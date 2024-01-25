<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Torneos</title>

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js'])
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <!-- Para que coja los cambios: npm run build -->

</head>

<body>

    @include('layouts.navigation')
    <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 mt-6 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h4>{{ $titulo }}</h4>
            </div>
            <div class="flex justify-between">
                <button
                    class="relative inline-flex items-center justify-center my-2 p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span
                        class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <a href="{{ $nuevo }}">Nuevo</a>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <div>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    {{ $slot }}

                </div>
            </div>
        </div>
    </div>

</body>

</html>
