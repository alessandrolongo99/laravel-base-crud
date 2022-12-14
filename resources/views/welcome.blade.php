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
                    <th scope="col">Edita</th>
                    <th scope="col">Cancella</th>
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
                        <td>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary" role="button">Edita</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h3>Data not found.</h3>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('comics.create') }}" class="btn btn-primary" role="button">Aggiungi nuovo record</a>
    </div>
</body>

</html>
