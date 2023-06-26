<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() {

        $arrMovies = Movie::all();

        return view ('homepage', compact('arrMovies'));
    }

    public function movies() {
        // chiedo i dati al DB

        // seleziona tuti i libri del DB
        $arrMovies = Movie::all();


        return view ('movies', compact('arrMovies'));
    }
}
