<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YukReview | {{ $title }}</title>

    {{-- link to goolgefont --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    {{-- link to bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- link to tailwind css --}}
    @vite('resources/css/app.css')
</head>

<style>
    body {
        font-family: Poppins;
    }
</style>

<body class="bg-soft-dark">
    @include('partials.navbar')
    <div class="max-w-6xl mx-auto px-4 text-white z-0">
        @yield('container')
    </div>
</body>

</html>
