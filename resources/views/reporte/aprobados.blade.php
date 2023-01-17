<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de aprobados</title>
    <!-- Styles -->
    <link href="{{ public_path('css/reporte.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .table>tbody>tr>td {
        vertical-align: middle;
    }

    table.table-bordered {
        border: 1px solid #585756;
        margin-top: 20px;
    }

    table.table-bordered>thead>tr>th {
        border: 1px solid #585756;
    }

    table.table-bordered>tbody>tr>td {
        border: 1px solid #585756;
    }

    .encabezado {
        background-color: #16a085;
        color: white;
        text-align: center;
    }

    .cuerpo {
        font-size: 13px;
    }
</style>

<body>
    <h3>Alumnos aprobados</h3>
    <hr>
    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th class="encabezado">Nombres</th>
                <th class="encabezado">Apellidos</th>
                <th class="encabezado">Grado</th>
                <th class="encabezado">Nota</th>
                <th class="encabezado">Estado</th>
            </tr>
        </thead>
        <tbody class="cuerpo">
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombres }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>{{ $alumno->grado->nombre }}</td>
                    <td class="text-center">{{ $alumno->nota_final }}</td>
                    <td class="text-center">
                        @if ($alumno->nota_final >= 6)
                            Aprobado
                        @else
                            Reprobado
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
