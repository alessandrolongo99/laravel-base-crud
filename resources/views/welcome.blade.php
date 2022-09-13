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
        <h1 class="text-center mt-5">LARAVEL-BASE-CRUD</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <th scope="row"><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->id }}</a></th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                @empty
                    <h3>Data not found.</h3>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
