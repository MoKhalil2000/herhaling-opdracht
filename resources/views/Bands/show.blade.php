<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Show Band</title>
</head>
<body class="font-sans bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 shadow-md rounded-md max-w-md w-full">
        <h1 class="text-3xl font-semibold mb-4">{{ $band->name }}</h1>
        <p class="text-gray-600 mb-4">Year: {{ $band->genre }}</p>
        <p class="text-gray-600 mb-4">Year: {{ $band->founded }}</p>
        <!-- Add other fields you want to display -->

        <div class="flex space-x-4">
            <a href="{{ route('bands.edit', ['band' => $band->id]) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Edit</a>

            <form action="{{ route('bands.destroy', ['band' => $band->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">Delete Band</button>
            </form>
        </div>
    </div>
</body>
</html>
