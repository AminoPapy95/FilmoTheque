@extends('template.master')

@section('title', 'Liste des spectacles')

@section('content')
    <div id="container">
        <div class="d-flex justify-content-center">
            <h1>Liste des {{ $resource }}</h1>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Representations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shows as $show)
                <tr>
                    <td> <a href="{{ route('show_show', $show->id) }}">{{ $show->title }}
                    </td>
                    <td>
                        @if ($show->bookable)
                            <span>{{ $show->price }} €</span>
                        @endif
                    </td>
                    <td>
                        @if ($show->representations->count() == 1)
                            - <span>1 représentation</span>
                        @elseif($show->representations->count() > 1)
                            - <span>{{ $show->representations->count() }} représentations</span>
                        @else
                            - <em>aucune représentation</em>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>






@endsection
