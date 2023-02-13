<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<h1>Post Base</h1>
    <h3>Título:</h3><br>
    <p>{{ $post->title }}</p><br>

    <br>
    <h3>Extracto publicación:</h3><br>
    <p>{{ $post -> extracto }}</p>
    <br>

    <br>
    <h3>Contenido publicación:</h3><br>
    <p>{{ $post -> contenido }}</p>
    <br>

    <br>
    <h3>Caducable</h3>
    <p> {{ $post -> caducable }}</p>

    <h3> Comentable </h3>
    <p> {{ $post -> comentable }}</p>
    <br>

    <br>
    <h3>Acceso</h3>
    <p>Privado</p>
    <p> {{ $post -> privado }}</p>
    <p>Público</p>
    <p> {{ $post -> publico }}</p>


    <br>

    <br>

</body>
</html>


