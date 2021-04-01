<form action="/notes/{{$note->id}}" method="POST">
  @csrf
  @method('PUT')
<textarea name="content">{{$note->content}}</textarea>
<button type="submit">update</button>
</form>