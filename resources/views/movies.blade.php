<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="/movies/{{ $movie['id']}}" class="text-blue-500 hover:underlone">
                    <strong>{{$movie['name']}}</strong>: Rated {{$movie['Rating']}} </li>
                </a>
             
        @endforeach
    </ul>

</x-layout>
