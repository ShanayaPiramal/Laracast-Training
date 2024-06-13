<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\MovieController;
#get request is just visiting a URL in the browser, '/' is just the homepage
Route::get('/', function () {
 return view('home');
});
// Index
Route::get('/movies', [MovieController::class, 'index']); 

//Create
Route::get('/movies/create', [MovieController::class, 'create']); 

//Show
Route::get('/movies/{movie}', [MovieController::class, 'show']);

//Store
Route::post('/movies',[MovieController::class, 'store']) ->middleware('auth');
   
//Edit
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])
->middleware('auth')
-> can('edit', 'movie');


//Update
Route::patch('/movies/{movie}', [MovieController::class, 'update']); 

//Delete
Route::delete('/movies/{movie}',[MovieController::class, 'destroy']);



Route::get('/contact', function () {
    return view('contact');
});

//Auth
Route::get('/register', [RegisteredUserController::class,'create']);
Route::post('/register', [RegisteredUserController::class,'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class,'destroy']);