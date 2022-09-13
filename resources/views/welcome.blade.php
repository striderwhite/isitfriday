<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Is It Friday?</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="antialiased flex flex-col justify-center h-screen">
    <div class="text-5xl text-white text-center mb-12">
        Is it friday?
    </div>
    <div class="text-4xl bg-green-500 text-black text-center py-12 font-bold">
        Yes!
    </div>
    <div class="flex justify-center mt-12 text-white">
        <a class="underline cursor-pointer" target="_blank" href="https://paypal.me/striderwhite">🍺 Buy me a beer 🍺</a>
    <div>
</body>

</html>
