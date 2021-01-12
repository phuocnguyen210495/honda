<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <x-style link="css/app.css" />
    <x-pushed-styles />
</head>

<body class="bg-gray-100 max-w-7xl m-auto p-8 ">

    <div class="flex">
            <x-buttons.redirect-back button="button" color="blue" content="Cancel" icon="trash" class="ml-4" icon-side="left" icon-set="heroicon" />
    </div>

    @livewireScripts
    <x-script link="js/app.js" />
    <x-pushed-scripts />
</body>

</html>