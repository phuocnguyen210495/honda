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
<body class="bg-gray-100 max-w-7xl m-auto p-8">
<x-alert 
    description="Nostrum accusantium tempora quae enim necessitatibus vero! Soluta enim asperiores esse aut commodi in quasi illo sint doloribus voluptates, provident tenetur maxime."
    content="Be careful of this, might be a problem" 
    type="success"
/>
@livewireScripts
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
