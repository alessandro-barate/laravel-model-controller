<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Function to retrieve the database's movies
    public function index()
    {
        $moviesList = Movie::where('title', '!=', null)->orderBy('title')->get();

        return view('welcome', compact('moviesList'));
    }
}
