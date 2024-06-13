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
   @can('edit', $movie)
        <p class = "mt-6">
                <a href="/movies/{{$movie->id}}/edit">
                    Edit
                </a>
        </p>
    @endcan 
    



</x-layout>
