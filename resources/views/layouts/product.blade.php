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
            <header class="container mt-3">  
        <nav class="d-flex navbar">
             <h1 class="text-primary"> @yield('title')</h1> 
             <div>
            <a class="btn" href="{{ route('types.index') }}">Vai ai prodotti</a>
            <a class="btn" href="{{ route('categories.index') }}">Vai alle categorie</a>
            </div>
            </nav>  
     </header>

    <main class="m-3">
    @yield('content')
    </main>
</body>
</html>