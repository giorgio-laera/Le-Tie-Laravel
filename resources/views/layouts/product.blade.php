<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @Vite(['resources/js/app.js','resources/scss/app.scss'])
    <title>@yield('title')</title>
</head>
<body>
    <header class="m-3">
        
        <h1 class="text-primary">
    @yield('title')
    </h1></header>

    <main class="m-3">
    @yield('content')
    </main>
</body>
</html>