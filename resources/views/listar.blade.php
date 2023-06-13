<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @include("header")

    @if(session('eliminado'))
        <b style="color: red">Persona eliminada</b> <br> <br>
    @endif

    @if(session('creado'))
    <b style="color: green">Persona Creada</b> <br> <br>
@endif
    <table>
        <tr>

            <thead>
                Nombre
            </thead>
            <thead>
                Apellido
            </thead>
        </tr>

        @foreach($personas as $p)
        <tr>
            <td>
                {{ $p -> nombre }}
            </td>
            <td>
                {{ $p -> apellido }}

            </td>

            <td>
                <a href="/eliminar/{{ $p -> id }}">Eliminar</a>
                <a href="/personas/{{ $p -> id }}">Ver detalles</a>
            </td>
        </tr>

        @endforeach
    </table>

    @include("footer")
</body>
</html>