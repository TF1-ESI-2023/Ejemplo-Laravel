<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @include("header")

    <form action="/personas" method="post">
        @csrf
        
        Nombre: <input type="text" name="nombre" id=""> <br>
        Apellido: <input type="text" name="apellido" id=""> <br>

        <input type="submit" value="Enviar">
    </form>

    @include("footer")

</body>
</html>