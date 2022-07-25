<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GRTEMPORALES - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="/img/icon.png">
        
        <link rel="stylesheet" href="/css/styles.css">
        
    </head>
    <body>
        <nav class="nav">
            <div class="icon-menu">☰</div>
            <a class="icon" href="/">
                <img src="/img/mainNav.png" alt="Icono y título de GRTEMPORALES">
            </a>
            <ul class="menu">
                <li class="link-active"> <a href="">Inicio</a></li>
                <li><a href="">Sobre nosotros</a></li>
                <li><a href="">Servicios</a></li>
                <li><a href="">Documentos</a></li>
                <li><a href="">Nuestros empleados</a></li>
                <li><a href="">Trabaje con nosotros</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
       
          @yield('content')

       <script src="/js/main.js"></script>
    </body>
</html>
