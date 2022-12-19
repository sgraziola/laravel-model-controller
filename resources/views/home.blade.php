@extends('layouts.app')

@section('content')

<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Benvenuto!</h1>
            <p class="col-md-8 fs-4">Milioni di film, serie TV e persone da scoprire.</p>
            <a href="{{route('collections')}}"><button class="btn btn-primary btn-lg" type="button">Esplora Ora</button></a>
        </div>
    </div>
    <section class="best_movies">
        <h2>I film più votati</h2>
        <div class="row row-cols-3">
            @forelse($bestMovies as $best)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>Title: {{$best->title}}</h3>
                        <h5>Original Title: {{$best->original_title}}</h5>
                        <p>Nationality: {{$best->nationality}}</p>
                        <p>Release date: {{$best->date}}</p>
                        <p>Community vote: {{$best->vote}}</p>
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
    </section>

</div>


@endsection