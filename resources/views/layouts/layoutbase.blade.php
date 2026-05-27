<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite("resources/js/app.js")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .hero-jumbotron {
            background-image: url('{{ asset("storage/img/workshop-bg.jpg") }}');
            background-size: cover;
            background-position: center 60%;
            height: 300px;
            width: 100%;

            
   
            display: flex;
            align-items: center;
            justify-content: center; 
        }

        .hero-title {

            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);
            font-size: 3.5rem;
            letter-spacing: 2px;
        }
    </style>

</head>
<body class="bg-light">
    
    @include('partials.components.navbar')

    <div class="hero-jumbotron">
        <h1 class="hero-title fw-bold text-white text-center text-uppercase m-0">
            @yield('title')
        </h1>
    </div>

    <div class="container mt-5 mb-5">
        <main>
            @yield('content')
        </main>
    </div>

    @include('partials.components.footer')
    
</body>
</html>