<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// § includo la classe 'Movie'
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        // § Query SQL che restituisce tutti i film, in pratica richiamo il metodo 'all' della classe 'Movie'
        $movies = Movie::all();
        $data = [
            'movies' => $movies
        ];
        // § Passo alla view 'index' l'array contenente tutti i film
        return view('movies.index', $data);
    }
}
