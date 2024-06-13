<h2>
    {{$movie->name}}
<p>
    Yay! You just listed a new movie you watched!
</p>
<p>
    <a href= "{{ url('/movies'. $movie->id}}"> View your Movie Listing</a>