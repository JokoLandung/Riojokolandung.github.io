<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>CRUD Vue JS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
</head>
<body>
    <div id="app"></div>
    {{-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="/js/app.js"></script> --}}
    {{-- @vite('resources/js/app.js')
     --}}

</body>
</html>