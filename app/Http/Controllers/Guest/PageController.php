<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('collections', compact('movies'));
    }

    public function home()
    {
        $bestMovies = Movie::where('vote', '>', 9)->get();
        return view('home', compact('bestMovies'));
    }
}
