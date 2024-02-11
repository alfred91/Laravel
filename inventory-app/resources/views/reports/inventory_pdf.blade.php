<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Inventario</title>
    <style>
        body {
            margin: 20px;
            font-family: 'DejaVu Sans', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        img {
            height: 50px;
            width: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        tr {
            page-break-inside: avoid;
        }

    </style>
</head>
<body>
    <h1 style="text-align: center;">Reporte de Inventario PDF</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Modelo</th>
                <th>Fabricante</th>
                <th>Descripcion</th>
                <th>Stock</th>
                <th>Estado</th>
                <th>Localizacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->category->name ?? 'Sin categoría' }}</td>
                <td>{{ $product->model }}</td>
                <td>{{ $product->manufacturer }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->location->city ?? 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
