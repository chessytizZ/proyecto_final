
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    body{
        background-color: rgb(48, 35, 4);
    }
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
        <div class="lol col-md-7 ">
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
                </div>

    <div class="lol col-md-7 ">
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
            </div>
            <div class="lol col-md-7 ">
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
</body>
</html>
