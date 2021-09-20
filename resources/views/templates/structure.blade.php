<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/app.css">
    <title>BoolPress</title>
</head>
<body>

    @include('layouts.app')

    <header class="homepage-header">
        @yield('content')
    </header>

    <main class="all-posts">
        @yield('main')
    </main>

    <main class="single-posts">
        @yield('singlePost')
    </main>

    <section>
        @yield('form')
    </section>

    <section>
        @yield('editPost')
    </section>

    <footer class="footer-container">
        @include('templates.footer')
    </footer>
    
</body>
</html>