<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <h1>{{$titulo}}</h1>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg m-8">
        <form action="/empleados" method="post" class="p-4">
            @csrf
            <p>Nombre: <input type="text" name="nombre" id="nombre"> </p>
            <p>Email: <input type="text" name="email" id="email"> </p>
            <p>DNI: <input type="text" name="dni" id="dni"> </p>
            <p>Telefono: <input type="tel" name="telefono" id="telefono"> </p>
            <p>Salario: <input type="number" name="salario" id="salario"> </p>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>