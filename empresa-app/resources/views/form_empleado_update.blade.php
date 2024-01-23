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
        <form action="/empleados/{{$empleado->id }}/update" method="post" class="p-4">
            @csrf
            <p>Nombre: <input type="text" name="nombre" id="nombre" value="{{$empleado->nombre}}"> </p>
            <p>Email: <input type="text" name="email" id="email" value="{{$empleado->email}}"> </p>
            <p>DNI: <input type="text" name="dni" id="dni" value="{{$empleado->dni}}" maxlength="10"> </p>
            <p>Telefono: <input type="tel" name="telefono" id="telefono" value="{{$empleado->telefono}}"> </p>
            <p>Salario: <input type="number" name="salario" id="salario" value="{{$empleado->salario}}" min="0"> </p>
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>