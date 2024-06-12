<x-layout>
    <x-slot:heading>
        Movie Listings
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($movies as $movie)
            <a href="/movies/{{ $movie['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg shadow-sm">
                <div class="font-bold text-blue-500">
                    {{$movie->streaming->name}}
                </div>
                <div>
                    <strong>{{ $movie['name'] }}</strong>: Rated {{ $movie['Rating'] }} 
                </div>
            </a>
        @endforeach
        <div>
            {{$movies->links()}}
        </div>

    </div>
</x-layout>
