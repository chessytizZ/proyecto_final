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
  <div class="padre mt-4 mx-4 px-4">
      <form action="/video" method="POST">
          @csrf
          <input type="hidden" name="_method" value="put" />
          <label for="exampleFormControlSelect1">Titulo del video </label>
          <div class="col-md-6"></div>
          <input name="nombre" value="{{$video->title}}" class="form-control" type="text" placeholder="Muñeca">

          <label for="exampleFormControlSelect1">url</label>
          <div class="col-md-6"></div>
                <input class="form-control" name="url" value="{{$video->url}}" rows="3">

          <label for="exampleFormControlSelect1">genero del post</label>
          <div class="col-md-6"></div>
          <select name="genero" class="form-control">

            @foreach ($generos as $genero)
                @if (isset($video->generos[0]->id) && ($genero->id == $video->generos[0]->id))
                    <option value="{{ $genero->id }}" selected="selected" >{{ $genero->type }}</option>
                @else
                    <option value="{{ $genero->id }}">{{ $genero->type }}</option>
                @endif
            @endforeach

          </select>

            @if(isset($video->generos[0]))
                <input type="hidden" value="{{$video->generos[0]->id}}" name="genero_anterior">
            @else
                <input type="hidden" value="nulo" name="genero_anterior">
            @endif

            <input type="hidden" value="{{$video->id}}" name="id">

          <button type="submit" class="btn">Crear</button>
        </form>


  </div>

  <div class="mt-4 ml-4 pr-4">
  <a class="btn btn-dark btn-lg" href="/inicio" role="button">Volver</a>
  </div>
</body>
</html>