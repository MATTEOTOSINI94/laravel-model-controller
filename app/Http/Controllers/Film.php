<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class Film extends Controller
{
    function index () {
        $movies =  movie::all();
       
        return view('film_db',["movies"=>$movies]);
    }
}
