<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Aula Web</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }}">
</head>
<body>
    <div class="topnav">
        <a class="active" href="/">Home</a>
        <a href="#news">Conferências</a>
        <a href="#contact">Contactos</a>
        <a href="#about">Sobre</a>
      </div>
      @foreach ($confs as $conf)
      <h1>{{$conf->name}}</h1>
      @endforeach
</body>
</html>
