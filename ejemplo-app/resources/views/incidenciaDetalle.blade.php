<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h2 class="text-2xl font-bold text-gray-700 my-4 mx-4">Incidencias</h2>
    <table class="table-fixed w-full mx-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Latitud</th>
                <th class="px-4 py-2">Longitud</th>
                <th class="px-4 py-2">Ciudad</th>
                <th class="px-4 py-2">Direccion</th>
                <th class="px-4 py-2">Descripcion</th>
                <th class="px-4 py-2">Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white">
                <td class="border px-4 py-2">{{$incidencia->latitud}}</td>
                <td class="border px-4 py-2">{{$incidencia->longitud}}</td>
                <td class="border px-4 py-2">{{$incidencia->ciudad}}</td>
                <td class="border px-4 py-2">{{$incidencia->direccion}}</td>
                <td class="border px-4 py-2">{{$incidencia->descripcion}}</td>
                <td class="border px-4 py-2">{{$incidencia->estado}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
