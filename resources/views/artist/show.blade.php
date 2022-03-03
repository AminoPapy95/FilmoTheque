@extends('template.master')
@section('title', 'Fiche d\'un artiste')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">{{ $artist->firstname }} {{ $artist->lastname }}</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
            to featured content or information.</p>
        <hr class="my-4">
        <h2>Liste des types</h2>
        <ul>
            @foreach ($artist->types as $type)
                <li>{{ $type->type }}</li>
            @endforeach
        </ul>
        <a class="btn btn-primary btn-lg" href="{{ route('artist_index') }}" role="button">Retour à l'index</a>
    </div>

@endsection
