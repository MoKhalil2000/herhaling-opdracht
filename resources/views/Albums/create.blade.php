<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Create Album</title>
</head>
<body class="font-sans bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 shadow-md rounded-md max-w-md w-full">
        <h1 class="text-3xl font-semibold mb-4">Create Album</h1>
        
        <form method="POST" action="/albums">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Album Name:</label>
                <input type="text" name="name" id="name" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-600">Album Year:</label>
                <input type="text" name="year" id="year" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="times_sold" class="block text-sm font-medium text-gray-600">Times Sold:</label>
                <input type="text" name="times_sold" id="times_sold" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
        </form>
    </div>
</body>
</html>
