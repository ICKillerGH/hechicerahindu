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

    @if (isset($beforeCss))
        {{ $beforeCss }}
    @endif

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    @if (isset($head))
        {{ $head }}
    @endif
</head>
<body {{ $attributes->only('class') }}>

    {{ $slot }}

    @if (isset($beforeScripts))
        {{ $beforeScripts }}
    @endif

    <script src="{{ asset('js/admin.js') }}"></script>

    @if (isset($scripts))
        {{ $scripts }}
    @endif
</body>
</html>
