@extends('layouts.app')

@section('content')

<div class="container movies py-5">
    <h1>Movies</h1>
    <div class="row row-cols-3 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>Title: {{$movie->title}}</h3>
                    <h5>Original Title: {{$movie->original_title}}</h5>
                    <p>Nationality: {{$movie->nationality}}</p>
                    <p>Release date: {{$movie->date}}</p>
                    <p>Community vote: {{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p>
                No data yet!
            </p>
        </div>
        @endforelse
    </div>
</div>

@endsection