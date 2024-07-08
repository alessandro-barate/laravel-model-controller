<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Function to retrieve the database's movies
    public function index()
    {
        $moviesList = [
            'movies' => [1, 2, 3, 4,]
        ];
        return ($moviesList);
    }
}
