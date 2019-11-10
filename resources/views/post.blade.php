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
        background-color: white;
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
        <div class="jumbotron">
                <h1 class="display-4"><small class="text-muted">{{ $post->title }}</small></h1>
                <p class="lead">body: <small class="text-muted">{{ $post->body }}</small></p>
                <p class="lead">fecha de creación:<small class="text-muted">{{ $post->created_at}}</small></p>
                <p class="lead">fecha de modificación:<small class="text-muted">{{ $post->updated_at }}</small></p>
                <hr class="my-4">
                <p class="lead">
                    @foreach ($post->generos as $genero )
                    <span class="badge badge-secondary">
                            {{ $genero->type }}
                    </span>
                    @endforeach
                </p>
                <a class="btn btn-dark btn-lg" href="/inicio" role="button">Volver</a>
        </div>
</body>
</html>
