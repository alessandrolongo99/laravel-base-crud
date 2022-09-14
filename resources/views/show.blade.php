<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">{{ $comic->title }}</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-primary" role="button">Torna alla home</a>
        <div class="card col-3 mb-3 mt-5 mx-auto">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->series }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <p class="card-text"><small class="text-muted">{{ $comic->type }}</small></p>
            </div>
        </div>
    </div>
</body>

</html>
