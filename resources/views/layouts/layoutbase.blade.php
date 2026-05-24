<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite("resources/js/app.js")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    @include('partials.components.navbar')
    <div class="container">
        <h1 class="mb-4 my-3">
            @yield('title')
        </h1>
        <p>
            @yield('content')
        </p>
    </div>
    @include('partials.components.footer')
</body>
</html>