<!doctype html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }} | {{ env('APP_NAME') }}"/>
    @if ($description)
        <meta name="description" content="{{ $description }}">
        <meta property="og:description" content="{{ $description }}">
    @endif
    <meta name="og:image" content="{{ $generateImage() }}">
    <meta property="og:url" content="{{ request()->url() }}"/>
    <meta property="og:locale" content="{{ App::getLocale() }}"/>
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    @livewireStyles
    <x-style link="css/app.css"/>
    <x-pushed-styles/>
</head>
<body {{ $attributes->merge(['class' => "bg-gray-100 font-medium"])}}>
{{ $slot }}
@livewireScripts
<x-script link="js/app.js"/>
<x-pushed-scripts/>
</body>
</html>
