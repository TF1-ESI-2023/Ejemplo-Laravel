<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @include("header")

    <h3>Persona Número {{ $persona -> id }}</h3>

    @if(session('modificado'))
        <b style="color: blue">Datos guardados</b> <br> <br>
    @endif 
    

    <form action="/modificar" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $persona -> id }}">
        Nombre: <input type="text" name="nombre" id="" value="{{ $persona -> nombre }}"> <br>
        Apellido: <input type="text" name="apellido" id="" value="{{ $persona -> apellido }}"> <br> <br>

        <input type="submit" value="Modificar">
    </form>

    
    <br>
    Fecha de Creación: {{ $persona -> created_at }} <br>
    Fecha de Modificación: {{ $persona -> updated_at }} <br>

    @include("footer")
</body>
</html>