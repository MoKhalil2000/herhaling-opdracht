<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Create Bands</title>
</head>
<body class="font-sans bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 shadow-md rounded-md max-w-md w-full">
        <h1 class="text-3xl font-semibold mb-4">Create Bands</h1>
        
        <form method="POST" action="/bands">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Band Name:</label>
                <input type="text" id="name'" name="name"  class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-sm font-medium text-gray-600">genre:</label>
                <input type="text" id="genre" name="genre" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div class="mb-4">
                <label for="founded" class="block text-sm font-medium text-gray-600"> founded:</label>
                <input type="text" id="founded" name="founded"  class="mt-1 p-2 w-full border rounded-md">
</div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
        </form>
    </div>
</body>
</html>
