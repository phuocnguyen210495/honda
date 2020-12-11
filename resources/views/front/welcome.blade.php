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
<body class="bg-gray-100 max-w-7xl m-auto">

<x-social type="tel" link="0614404464"/>
<x-social type="mail" link="felixdorn@protonmail.com" />
<x-social type="instagram" link="felixdorn" />
<x-social type="twitter" link="afelixdorn" />
<x-social type="linkedin" link="someguy" />
<x-social type="dev" link="felixdorn" />
<x-social type="github" link="felixdorn" />
<x-social type="gitlab" link="felixdorn" />

@livewireScripts
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
