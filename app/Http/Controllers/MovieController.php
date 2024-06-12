<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
   public function index(){
    $movies = Movie::with('streaming')->latest()->simplePaginate(3); 
    return view('movies.index', [
        'movies' => $movies
    ]);

   }
    public function create(){
        return view('movies.create');

    }
    public function show(Movie $movie){
        return view('movies.show', ['movie' => $movie]);

    }
    public function edit(Movie $movie){
    return view('movies.edit', ['movie' => $movie]);

    }
    public function store(){
        request()->validate([
            'name' => ['required'],
            'Rating' => ['required'],
        ]);
        Movie::create([
            'name' => request('name'),
            'Rating' => request('Rating'), 
            'streaming_id' => 1
        ]);
        return redirect('/movies');
        
    }


    public function update( Movie $movie){
        request()->validate([
            'name' => ['required'],
            'Rating' => ['required'],
        ]);
        $movie->update([
            'name' => request('name'),
            'Rating' => request('Rating'), 
            'streaming_id' => 1
        ]);
        return redirect('/movies/'. $movie->id);
    }

    public function destroy(Movie $movie){
        $movie ->delete();
        return redirect('/movies');
    }



}
