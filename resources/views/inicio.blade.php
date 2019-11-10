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
.margen{
    margin-left:30px!important;
}
.padre{
    height: 220px;
}
form{
    font-family: 'Big Shoulders Display', cursive;
    font-size: 20px!important;
    }

.boton{
    position: relative;
    height: 100px;
    background-color:deeppink;
    width: 300px;
}
.lol{
    position: relative;
}

.colorts{
    color:    black;
    background-color:  rgb(216, 206, 67);
}
.colorts2{
    color:    black;
    background-color:    rgb(243, 235, 210);
}
.colorts3{
    color:    black;
    background-color:     rgb(186, 196, 130);
}
td{
    color: black;
    background-color:   rgb(170, 133, 22);
}
</style>

<div class=" margen py-3">


<div class=" row py-4">
    <div class="py-3 padre col-md-3">
        <form action="/inicio" method="POST">
          @csrf
              <div class="form-group">
                      <label for="exampleFormControlSelect1">Seleccione qué desea hacer.. </label>
                      <div class="col-md-6"></div>
                      <select name="accion" class="form-control" id="exampleFormControlSelect1">
                          <option value="crear">Crear</option>
                          <option value="editar">Editar</option>
                          <option value="eliminar">Eliminar</option>
                      </select>
                    </div>
            <div class="form-group">
              <div class="col-md-6"></div>
              <select name="entidad" class="form-control" id="exampleFormControlSelect2">
                  <option value="post">Post</option>
                  <option value="video">Video</option>
                  <option value="genero">Genero</option>
              </select>
            </div>

            <div class="col-md-6"></div>
            <button type="submit" class="btn">Enviar</button>
            <div>
        </form>
          <a href="/logout" type="submit" class="btn btn-danger p-5 mt-5">Salir sesion</a>
            </div>

    </div>
  <div class="col-md-6">
  <div class="lol">
    <table class="table ">

        <thead class="table colorts">

          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">contenido</th>
            <th scope="col">creado</th>
            <th scope="col">actualizado</th>
          </tr>
        </thead>
        <tbody class="table-secondary">
         @foreach ( $posts as $post )

                    <tr>
                            <td> <a class="btn btn-dark btn-lg" href="/post/{{ $post->id }}" role="button">Ver</a></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                      </tr>

         @endforeach
        </tbody>

      </table>
      <a href="/post/pdf" class="btn btn-primary mb-4">Generar pdf de mis post</a>
    </div>

    <div class="lol ">
<table class="table ">

  <thead class="table colorts2">

    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">contenido</th>
        <th scope="col">creado</th>
        <th scope="col">actualizado</th>
      </tr>
    </thead>
    <tbody class="table-secondary">
      @foreach ( $videos as $video )

      <tr>
        <td> <a class="btn btn-dark btn-lg" href="/video/{{ $video->id }}" role="button">Ver</a></td>
        <td>{{$video->title}}</td>
        <td>{{$video->url}}</td>
        <td>{{$video->created_at}}</td>
        <td>{{$video->updated_at}}</td>
      </tr>

      @endforeach
    </tbody>

  </table>
      <a href="/video/pdf" class="btn btn-primary mb-4">Generar pdf de mis videos</a>
</div>
<div class="lol ">
  <table class="table ">

    <thead class="table colorts3">

      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">creado</th>
        <th scope="col">actualizado</th>
              </tr>
            </thead>
            <tbody class="table-secondary">
              @foreach ( $generos as $genero )

              <tr>
                <td>{{$genero->id}}</td>
                <td>{{$genero->type}}</td>
                <td> {{ $genero->created_at }}</td>
                <td>{{$genero->updated_at}}</td>
              </tr>

              @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>
</div>
</body>
</html>
