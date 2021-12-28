<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>My Test App</title>
</head>
<body class="h-full w-full font-sans text-gray-900 antialiased p-4">
<div class="mx-auto">
    <h1 class="text-3xl text-indigo-700 font-bold underline">
        Hello world!
    </h1>
    <div class="bg-white" x-data="{ open: false }">
        No more word
        <br/>
        <button @click="open = true" class="bg-indigo-700 text-white rounded-md mt-3 p-2">
            Click here
        </button>

        <div x-show="open" @click.away="open = false" class="bg-red-400 text-white text-lg p-2 mt-4">
            Thanks You
        </div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
