<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <x-style link="css/app.css"/>
    <x-pushed-styles/>
</head>
<body class="bg-gray-100 max-w-7xl m-auto p-8 font-medium">
@php($errors->put('default', new \Illuminate\Support\MessageBag([
        'website' => 'This is invalid'
])))

<x-input
    name="website"
    label="Site Internet"
    corner-hint="Optional"
    icon="globe-alt"
    addon-side="left"
    addon="http://"
    placeholder="website.com"
    inline-addon
    info="Your site must be accessible without an heavy use of Javascript."
/>
@livewireScripts
<x-script link="js/app.js"/>
<x-pushed-scripts/>
</body>
</html>
