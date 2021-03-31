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
<p>{{ $note->content }}</p>
@endforeach