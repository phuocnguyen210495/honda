<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>
<body class="bg-gray-100 max-w-7xl m-auto mt-16">

<livewire:table model="App\Model\Visitor" include="id, ip, ua, visits" />

<script src="{{ mix('js/app.js') }}"></script>
@livewireScripts
</body>
</html>
