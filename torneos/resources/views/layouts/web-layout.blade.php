<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos de Videojuegos</title>
    <!-- Incluir los estilos de Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 p-4">

    <nav class="block w-full max-w-screen-xl px-6 py-3 mx-auto text-white bg-white border shadow-md rounded-xl border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
        <div class="flex items-center justify-between text-blue-gray-900">
            <a href="#" class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-semibold leading-relaxed tracking-normal text-inherit antialiased">
                Torneos Videojuegos
            </a>
            <div class="hidden lg:block">
                <ul class="flex flex-col gap-2 my-2 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                    <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                        <a href="{{ route('web.juegos') }}" class="flex items-center transition-colors hover:text-blue-500">
                            Juegos
                        </a>
                    </li>
                    <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                        <a href="{{ route('web.torneos') }}" class="flex items-center transition-colors hover:text-blue-500">
                            Torneos
                        </a>
                    </li>
                    @auth
                    <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                        <a href="{{ route('web.inscripciones')}}" class="flex items-center transition-colors hover:text-blue-500">
                            Inscripciones
                        </a>
                    </li>
                    @endauth
                    <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                        @auth
                        @if (Auth::user()->rol == 'admin')
                        <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('Dashboard')}}</a>
                        @endif

                        <a href="{{ route('milogout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('Log Out')}}</a>
                        @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('Log in')}}</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('Register')}}</a>
                        @endif
                        @endauth
                    </li>
                </ul>
            </div>
            <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </span>
            </button>
        </div>
    </nav>

    <div class="block w-full max-w-screen-xl px-6 py-6 my-3 mx-auto text-white bg-white bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
            <h2 class="block antialiased tracking-normal py-3 px-3 font-sans text-4xl font-semibold leading-[1.3] leading-relaxed text-blue-gray-900">
                {{ $titulo }}
            </h2>
            <div class="flex h-full flex-wrap">
                {{ $slot }}
            </div>
            <p>
                @if (isset($links))
                {{ $links }}
                @endif
            </p>
        </p>
    </div>


    <footer class="block w-full max-w-screen-xl px-6 py-3 mx-auto text-white bg-white border shadow-md rounded-xl border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
        <div class="flex items-center justify-between text-blue-gray-900">
            <p class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
                © 2023 Laravel Javi
            </p>
        </div>
    </footer>
</body>

</html>
