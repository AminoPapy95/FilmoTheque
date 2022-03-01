@extends('template.master')
@section('title', 'Fiche d\'un artiste')

@section('content')
    <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>
    <nav><a href="{{ route('artist_index') }}">Retour à l'index</a></nav>

    <h2>Liste des types</h2>
    <ul>
    @foreach($artist->types as $type)
        <li>{{ $type->type }}</li>
    @endforeach
    </ul>
    <div><a href="{{ route('artist_edit' ,$artist->id) }}">Modifier</a></div>
@endsection
