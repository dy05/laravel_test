<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>My Test App</title>
</head>
<body>
<h1 class="text-3xl text-indigo-700 font-bold underline">
    Hello world!
</h1>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
