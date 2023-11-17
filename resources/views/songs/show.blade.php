<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Nummer is {{ $title }}</h1>
 <p>Singer is: {{ $singer }}</p>
 <form action="{{ route('destroy', ['id' => $song]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="sumbit"> Delete Song</button>
    </form>
    <a href="{{ route('edit', ['id' => $song]) }}"> <button>edit</button></a>
</body>
</html>