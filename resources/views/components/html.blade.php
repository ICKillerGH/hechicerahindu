@props([
    'title' => null,
])

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title . ' -' : '' }} {{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @if (isset($head))
        {{ $head }}
    @endif
</head>
<body {{ $attributes->only('class') }}>

    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>

    @if (isset($scripts))
        {{ $scripts }}
    @endif
</body>
</html>
