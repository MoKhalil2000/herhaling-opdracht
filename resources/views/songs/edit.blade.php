<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h2>Bewerk Song</h2>
        <form method="POST" action="{{ route('update', $id) }}">
            @csrf
            @method('PUT')
                <label for="songName">Song Naam:</label>
                <input type="text"  id="title" name="title" value="{{ $title }}">
                <label for="songName">Singer:</label>
                <input type="text" id="singer" name="singer" value="{{ $singer }}">

            <button type="submit">Bijwerken</button>
            
        </form>
    </div>
</body>
</html>
    






