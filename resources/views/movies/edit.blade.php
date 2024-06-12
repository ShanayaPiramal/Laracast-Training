<x-layout>
    <x-slot:heading>
        Edit Movie: {{$movie->name}}
    </x-slot:heading>
<form method = "POST" action="/movies/{{$movie->id}}">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="name" id="name" value="{{$movie->name}}" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Mary Poppins" required>
              </div>
            </div>
            <div class="sm:col-span-4">
                <label for="Rating" class="block text-sm font-medium leading-6 text-gray-900">Rating</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="Rating" id="Rating" value="{{$movie->Rating}}" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="4/5">
                  </div>
                </div>
            </div>
            @if($errors -> any())
                <ul>
                    @foreach ($errors ->all() as $error)
                        <li> {{$error}} </li>
                  
                    @endforeach
            @endif

      
  
        
        </div>
      </div>

  
    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div> 
            <button form = "delete-form" class = "text-red"> Delete </utton>

        </div>
    <div class = "flex items-center gap x-6">
      <a href="/movies/{{$movie->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
  </form>
  <form method ="POST" action="/movies/{{$movie->id}}" id = "delete-form" class="hidden">
    @csrf
    @method('DELETE')
  </form>
  


</x-layout>
