<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Laracast')</title>
    
</head>
<body>  
    
    <ul>
        <li><a href="/contact">Entre em contato</a></li>
        <li><a href="/about">Sobre</a></li>
        <li><a href="/">Home</a></li>
    </ul>

    @yield('content')

</body>
</html>