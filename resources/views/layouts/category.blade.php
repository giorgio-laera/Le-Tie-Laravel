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
    <header class="container mt-3">  
        <nav class="d-flex navbar">
             <h1> @yield('title')</h1> 
             <div>
            <a class="btn" href="{{ route('products.index') }}">Vai ai prodotti</a>
            <a class="btn" href="{{ route('products.index') }}">Vai ai tipi</a>
            </div>
            </nav>  
     
</header>
<main class="container">
    @yield('content')
</main>

</body>
</html>