<!DOCTYPE html>
<html lang="es">
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
        </div>
    </nav>

    <div>   
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    {{ $slot }}

                </div>
            </div>
        </div>
    </div>

</body>
</html>