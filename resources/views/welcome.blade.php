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
        <table class="table m-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Numero Pagine</th>
                    <th scope="col">Editore</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->author }}</td>
                        <td>{{ $comic->page_number }}</td>
                        <td>{{ $comic->editor }}</td>
                    </tr>
                @empty
                    <h3>Data not found.</h3>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
