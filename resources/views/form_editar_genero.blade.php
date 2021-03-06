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
            height: 200px!important;
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
  <div class="padre mt-4 ml-4 pr-4">
      <form action="/genero" method="POST">
          @csrf
          <input type="hidden" name="_method" value="put" />
          <label for="exampleFormControlSelect1">Tipo de genero </label>
          <div class="col-md-6"></div>
          <input name="nombre" value="{{$genero->type}}" class="form-control" type="text" placeholder="Pop">
   
          <div class="col-md-6"></div>
          <input type="hidden" value="{{$genero->id}}" name="id">
          <button type="submit" class="btn">Enviar</button>
        </form>


    </div>
    <div class="mt-4 ml-4 pr-4">
    <a class="btn btn-dark btn-lg" href="/inicio" role="button">Volver</a>
    </div>


</body>
</html>