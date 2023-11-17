<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>List of Albums</title>
</head>
<body class="font-sans bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-screen-lg w-full p-8">
        <h1 class="text-3xl font-semibold mb-4">List of Albums</h1>

        <div class="flex flex-wrap -mx-4">
            @foreach($albums as $album)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 px-4 mb-4">
                    <div class="bg-white p-4 shadow-md rounded-md">
                        <a href="{{ route('albums.show', ['album' => $album->id]) }}" class="text-blue-500 hover:underline">{{ $album->name }}</a>
                    </div>
                </div>
            @endforeach

            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 px-4 mb-4">
                <div class="bg-white p-4 shadow-md rounded-md">
                    <a href="{{ route('albums.create') }}" class="text-green-500 hover:underline"><button class="bg-green-500 text-white px-4 py-2 rounded-md">Create Album</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
