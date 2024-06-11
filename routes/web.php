<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;

#get request is just visiting a URL in the browser, '/' is just the homepage
Route::get('/', function () {
 return view('home');
});

Route::get('/movies', function ()  {
    return view('movies', [
        'movies' => Movie::all()
    ]);
});
Route::get('/movies/{id}', function ($id)  {
$movie = Movie::find($id);
    return view('movie', ['movie' => $movie]);
});
Route::get('/contact', function () {
    return view('contact');
});