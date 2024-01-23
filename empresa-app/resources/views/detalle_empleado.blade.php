<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
<h1>{{$titulo}}</h1>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg m-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">DNI</th>
                    <th scope="col" class="px-6 py-3">Telefono</th>
                    <th scope="col" class="px-6 py-3">Salario</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $empleado->nombre }}</td>
                    <td class="px-6 py-4">{{ $empleado->email }}</td>
                    <td class="px-6 py-4">{{ $empleado->dni }}</td>
                    <td class="px-6 py-4">{{ $empleado->telefono }}</td>
                    <td class="px-6 py-4">{{ $empleado->salario }}</td>
                    <td class="px-6 py-4">{{ $empleado->salario }}</td>

                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>