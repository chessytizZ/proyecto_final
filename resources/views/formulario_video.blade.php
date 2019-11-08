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
    <style>
        .padre{
            height: 360px!important;
            width: 300px!important;
        }
        form{
            top: 18px;
            position: relative;
            margin-left: 20px;
            font-family: 'Big Shoulders Display', cursive;
            font-size: 20px!important;
            }
        
        .boton{
            position: relative;
            height: 100px;
            background-color:deeppink;
            width: 300px;
            left:50%;
        }
        </style>
  <div class="padre">
      <form action="/video" method="POST">
          @csrf
          <label for="exampleFormControlSelect1">Titulo del video </label>
          <div class="col-md-6"></div>
          <input name="nombre" class="form-control" type="text" placeholder="Muñeca">

          <label for="exampleFormControlSelect1">url</label>
          <div class="col-md-6"></div>
          <div class="form-group">
                <textarea class="form-control" name="url" rows="3"></textarea>
          </div>

          <label for="exampleFormControlSelect1">genero del post</label>
          <div class="col-md-6"></div>
          <select name="genero" class="form-control">

            @foreach ($generos as $genero)

              <option value="{{ $genero->id }}">{{ $genero->type }}</option>

            @endforeach

          </select>

          <button type="submit" class="btn">Crear</button>
        </form>


  </div>



</body>
</html>
