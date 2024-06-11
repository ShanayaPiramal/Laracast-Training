<x-layout>
    <x-slot:heading>
        Movie
    </x-slot:heading>
   <h2 class= "font-bold text-lg" >
    {{ $movie['name']}}
   </h2>
   <p>
        This movie is rated {{$movie['Rating']}}.
   </p>


</x-layout>
