<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Contenido</th>
            <th scope="col">categoría</th>
          </tr>
        </thead>
        <tbody>
        @if(!empty($data))
            @foreach ($data as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>
                        @foreach ($post->generos as $genero )
                        <span class="badge badge-secondary">
                                {{ $genero->type }}
                        </span>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        @else 
            <tr>
                <td colspan="3">No se encontraron registros</td>
            </tr>
        @endif
        </tbody>
      </table>
</body>
</html>