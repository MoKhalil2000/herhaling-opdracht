<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>List of Songs</h1>
    
@foreach($songs as $song)
    <a href="{{ route('show', ['id' => $song->id]) }}">{{ $song->title}}</a><br>
@endforeach
</body>
</html>