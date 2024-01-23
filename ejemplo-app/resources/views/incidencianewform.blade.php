<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Incidencias</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h2 class="text-center font-bold text-lg mb-4">Reportar Incidencia</h2>

    <div class="w-full max-w-md mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="/incidencias">
            @csrf
            <!-- Latitud -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="latitud">
                    Latitud
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="latitud" name="latitud" type="text" placeholder="Latitud">
            </div>
            <!-- Longitud -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="longitud">
                    Longitud
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="longitud" name="longitud" type="text" placeholder="Longitud">
            </div>
            <!-- Ciudad -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="ciudad">
                    Ciudad
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ciudad" name="ciudad" type="text" placeholder="Ciudad">
            </div>
            <!-- Etiqueta -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="etiqueta">
                    Etiqueta
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="etiqueta" name="etiqueta" type="text" placeholder="Etiqueta">
            </div>
            <!-- Dirección -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">
                    Dirección
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="direccion" name="direccion" type="text" placeholder="Dirección">
            </div>
            <!-- Descripción -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                    Descripción
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" name="descripcion" placeholder="Descripción de la incidencia"></textarea>
            </div>
            <!-- Estado (valor predeterminado: abierta) -->
            <input type="hidden" id="estado" name="estado" value="abierta">

            <!-- Botón de envío -->
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Reportar Incidencia
                </button>
            </div>
        </form>
    </div>
</body>

</html>