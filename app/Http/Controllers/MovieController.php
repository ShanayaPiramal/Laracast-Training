<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Gate; 
use App\Models\User;    


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
        Gate::define('edit-movie', function(User $user, Movie $movie){
            return $movie->streaming->user->is($user);
        });
        if(Auth::guest()){
            return redirect('/login');  
        }
      
        Gate::authorize('edit-movie', $movie);

    return view('movies.edit', ['movie' => $movie]);

    }
    public function store(){
        request()->validate([
            'name' => ['required'],
            'Rating' => ['required'],
        ]);
        $movie = Movie::create([
            'name' => request('name'),
            'Rating' => request('Rating'), 
            'streaming_id' => 1
        ]);
        Mail::to($movie->streaming->user)->send(
            new \App\Mail\MovieListed());
        
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
