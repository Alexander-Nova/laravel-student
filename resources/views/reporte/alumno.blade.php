<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de aprobados</title>
    <!-- Styles -->
    <link href="{{ public_path('css/reporte.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h2>Listado de alumno</h2>
    <hr>
    <table  class="table table-bordered">
        <thead class="thead">
            <tr>
                <th class="encabezado">Nombres</th>
                <th class="encabezado">Apellidos</th>
                <th class="encabezado">Grado</th>
                <th class="encabezado">Nota</th>
                <th class="encabezado">Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $alumnos->nombres }}</td>
                <td>{{ $alumnos->apellidos }}</td>
                <td>{{ $alumnos->grado->nombre }}</td>
                <td>{{ $alumnos->nota_final }}</td>
                <td>@if ($alumnos->nota_final >= 6) Aprobado @else Reprobado @endif </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
