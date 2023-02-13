<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<h1>Formulario Base</h1>
<form action="/my-handling-form-page" method="post">
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title_post" placeholder="Ingresa aquí el título de la publicación" size="30">
    <br>

    <br>
    <label for="extracto">Extracto publicación:</label><br>
    <input type="text" id="extracto" name="extracto" placeholder="Ingresa un extracto de la publicación" size="30">
    <br>

    <br>
    <label for="content">Contenido publicación:</label><br>
    <textarea id="content" name="post_content" placeholder="Ingresa el contenido completo de la publicación" rows="10" cols="90"></textarea>
    <br>

    <br>
    <input type="checkbox" id="caducable" name="caducable" value="caducable">
    <label for="caducable"> Caducable </label>
    <input type="checkbox" id="comentable" name="comentable" value="comentable">
    <label for="comentable"> Comentable </label>
    <br>

    <br>
    <label for="acceso">Acceso</label>
    <select id="acceso" name="acceso">
        <option value="privado">Privado</option>
        <option value="publico">Público</option>
    </select>
    <br>

    <br>
    <input type="submit" value="Submit">


</form>
</body>
</html>


