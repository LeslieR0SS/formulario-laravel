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
<h1>@lang('form-lang.form-name')</h1>
<form action="{{ route('post.store') }}" method="post">
    @csrf
    <!-- 1r de añadir soporte de lenguaje multilingue. -->
    <label for="title">@lang('form-lang.title')</label><br>
    <input type="text" id="title" name="title" placeholder="Ingresa aquí el título de la publicación" size="33" :value="old('title')">
    <br>

    <br>
    <!-- 2n de añadir soporte de lenguaje multilingue. -->
    <label for="extracto">{{__('form-lang.extract')}}</label><br>
    <input type="text" id="extracto" name="extracto" placeholder="Ingresa un extracto de la publicación" size="33">
    <br>

    <br>
    <label for="content">{{__('form-lang.content')}}</label><br>
    <textarea id="content" name="content" placeholder="Ingresa el contenido completo de la publicación" rows="10" cols="90"></textarea>
    <br>

    <br>
    <input type="checkbox" id="caducable" name="caducable" value="caducable">
    <label for="caducable"> @lang('form-lang.expired') </label>
    <input type="checkbox" id="comentable" name="comentable" value="comentable">
    <label for="comentable"> {{__('form-lang.commentable')}} </label>
    <br>

    <br>
    <label for="acceso">@lang('form-lang.access')</label>
    <select id="acceso" name="acceso">
        <option value="privado">@lang('form-lang.private')</option>
        <option value="publico">{{__('form-lang.public')}}</option>
    </select>
    <br>

    <br>
    <input type="submit" value="Submit">


</form>
</body>
</html>


