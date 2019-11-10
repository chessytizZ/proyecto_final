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
    <style>
        .lol{
            position: relative;
            margin-left: 20%;
            margin-top: 2%;
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
</head>

<body>
    <div class="container">
        <div class="lol col-md-7 ">
                <table class="table ">

                    <thead class="table colorts3">

                      <tr>
                        <th scope="col">Editar</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">creado</th>
                        <th scope="col">actualizado</th>
                      </tr>
                    </thead>
                    <tbody class="table-secondary">
                     @foreach ( $generos as $genero )

                                <tr>
                                        <td> <a class="btn btn-dark btn-lg" href="/genero/editar/{{ $genero->id }}" role="button">Editar</a></td>
                                        <td>{{$genero->type}}</td>
                                        <td> {{ $genero->created_at }}</td>
                                        <td>{{$genero->updated_at}}</td>
                                  </tr>

                     @endforeach
                    </tbody>

                  </table>
                  <a class="btn btn-dark btn-lg" href="/inicio" role="button">Volver</a>
                </div>
    </div>
</body>
</html>
