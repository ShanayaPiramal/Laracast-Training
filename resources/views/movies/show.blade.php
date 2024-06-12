<x-layout>
    <x-slot:heading>
        Movie Listing
    </x-slot:heading>
   <h2 class= "font-bold text-lg" >
    {{ $movie->name}}
   </h2>
   <p>
        This movie is rated {{$movie['Rating']}}.
   </p>
   <p>
    <a href="/movies/{{$movie->id}}/edit">
        Edit
    </a>
    </p>



</x-layout>
