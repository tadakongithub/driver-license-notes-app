<form action="/search" method="POST">
@csrf
<input type="text" name="search">
<button type="submit">search</button>
</form>
<form action="/yearsearch" method="POST">
  @csrf
<input type="date" name="studydate"/>
<button type="submit">Search</button>
</form>
@foreach ($notes as $note)
<p>{{ $note->content }} <a href="/edit/{{$note->id}}">edit</a>
<form action="/notes/{{$note->id}}" method="POST" onsubmit="return confirm('Are you deleting a note?')">
@csrf
@method('DELETE')
<input type="submit" value="Delete" />
</form> </p>
@endforeach
