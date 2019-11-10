<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/formulario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
    <title>Departamento</title>
</head>

<body>
  <div class="container mt-4">
  <div class="padre p-4">
      <form action="/post" method="POST">
          @csrf
          <label for="exampleFormControlSelect1">Nombre del post </label>
          <div class="col-md-6"></div>

          <input name="nombre" class="form-control" type="text" placeholder="Nombre">

          <label for="exampleFormControlSelect1">contenido del post</label>
          <div class="col-md-6"></div>
          <input name="contenido" class="form-control" type="text" placeholder="Hola!">

          <label for="exampleFormControlSelect1">genero del post</label>
          <div class="col-md-6"></div>
          <select name="genero" class="form-control">

            @foreach ($generos as $genero)

              <option value="{{ $genero->id }}">{{ $genero->type }}</option>

            @endforeach

          </select>
          <div class="col-md-6"></div>
          <button type="submit" class="btn">Crear</button>
        </form>


  </div>

    <a class="btn btn-dark btn-lg mt-4" href="/inicio" role="button">Volver</a>
    </div>
</body>
</html>