<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/song">
    @csrf
    <label for="title">Titel:</label>
    <input type="text" name="title" id="title" required>

    <label for="singer">Singer:</label>
    <input type="text" name="singer" id="singer" required>

    <button type="submit">Opslaan</button>
</form>
</form>
</body>
</html>