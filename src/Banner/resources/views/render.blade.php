<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        * {
            font-family: "Nunito", sans-serif;
        }
    </style>
</head>
<body class="p-6 bg-gray-900 h-screen overflow-hidden ">
<div class="h-full p-16 rounded-lg flex justify-center flex-col">
    <h1 class="font-bold        text-blue-300 mt-8 leading-tight" style="font-size: 110px;">{{ $title }}</h1>
    <p class="text-2xl text-gray-300 mt-4" style="line-height:62px; font-size: 48px">{{ $body }}</p>
</div>
</body>

</html>

