<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Driver's License Notes App</title>
</head>
<body>
    <h1>Tadashi's Driver License Notes</h1>
    <form method="POST" action="/">
        @csrf
        <label for="note">new note</label>
        <textarea name="note" id="note"></textarea>
        <button type="submit">Add</button>
    </form>
</body>
</html>