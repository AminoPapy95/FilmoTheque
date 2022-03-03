@extends('template.master')
@section('title', 'Liste des artistes')

@section('content')
<div id="container">
    <div class= "d-flex justify-content-center">
    <h1>Liste des {{ $resource }}</h1>
    </div>
</div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
          </tr>
        </thead>
        <tbody>
            @foreach($artists as $artist)
          <tr>
            <td>{{ $artist->id}}</td>
            <td>{{ $artist->firstname }}</td>
            <td><a href="{{ route('artist_show', $artist->id) }}">{{ $artist->lastname }}</a></td>

          </tr>
          @endforeach
        </tbody>
      </table>
@endsection

