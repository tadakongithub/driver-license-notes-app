<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
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
    <div class="container my-5">
      <div class="row">
    <div class="col-8">{{ $note->content }}</div> 
    <a class="col-2" href="/edit/{{$note->id}}">edit</a>
    <form class="col-2" action="/notes/{{$note->id}}" method="POST" onsubmit="return confirm('Are you deleting a note?')">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete" />
    </form>
    </div>
    </div>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
