@extends('layout.main')

@section('content')


<main class="mt-5 container">
    <h1 class="text-center">Database Movies</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Titolo Originale</th>
            <th scope="col">Nazionalità</th>
            <th scope="col">Data d'uscita</th>
            <th scope="col">Voto</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
              <th scope="row">{{ $movie->id }}</th>
              <td>{{ $movie->title }}</td>
              <td>{{ $movie->original_title }}</td>
              <td>{{ $movie->nationality }}</td>
              <td>{{ $movie->date }}</td>
              <td>{{ $movie->vote }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</main>
@endsection
