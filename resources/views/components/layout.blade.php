<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>

    <meta name="og:image" content="{{ $generateImage() }}">
    @livewireStyles
    <x-style link="css/app.css"/>
    <x-pushed-styles/>
</head>
<body class="bg-gray-100 font-medium min-h-screen flex items-center justify-center">
<a class="underline text-blue-500" href="{{ $generateImage() }}">Image</a>
{{ $slot }}
@livewireScripts
<x-script link="js/app.js"/>
<x-pushed-scripts/>
</body>
</html>
