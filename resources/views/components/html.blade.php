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

    @if (isset($head))
        {{ $head }}
    @endif
</head>
<body {{ $attributes->only('class') }}>

    {{ $slot }}

    @if (isset($scripts))
        {{ $scripts }}
    @endif
</body>
</html>
