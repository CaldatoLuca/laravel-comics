@extends('layouts.main')

@section('main')
    {{-- jumbotron --}}
    <section class="jumbotron"></section>

    {{-- cards --}}
    <section class="current-series">
        <h2>Current Series</h2>
        <div class="container">
            <div class="comics d-flex">
                @foreach ($comics as $comic)
                    <div class="element">
                        <div class="image">
                            <img src="{{ Vite::asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="text">{{ $comic['title'] }}</div>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-main text-uppercase">Load More</button>
        </div>
    </section>
@endsection
