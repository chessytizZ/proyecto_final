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
    height: 300px!important;
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
<form action="/logout">
    <div class="form-group">
 <button type="submit" class="boton">Salir sesion</button>
</form>

  <div class="padre">
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
        </form>


  </div>



</body>
</html>
