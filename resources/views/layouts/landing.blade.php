<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plantilla empresa - @yield('title')</title>
        
        <link rel="stylesheet" href="/css/animations/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/css/landing/styles.css">
    </head>
    <body>
        


        <nav class="nav">
            
            <img src="/img/menu.svg" alt="" class="icon-menu">
            <a class="icon" href="/">
                <img src="/img/mainNav.png" alt="Icono y título de GR Temporales">
            </a>
            <ul class="menu">
                <li class="link-nav {{setActive("/")}}"> <a href="/">Inicio</a></li>
                <li class="link-nav {{setActive("nosotros")}}"><a href="/nosotros">Sobre nosotros</a></li>
                <li class="link-nav {{setActive("servicios")}}"><a href="/servicios">Servicios</a></li>
                <li class="link-nav"><a href="">Documentos</a>
                    <i class="caret fa-solid fa-angle-down"></i>
                    <ul class="sub-menu">
                        <li><a href="#" target="_blank">Reglamento interno del trabajo</a></li>
                        <li><a href="#" target="_blank">Acta de constitución</a></li>
                        
                    </ul>
                </li>
                <li class="link-nav"><a href="#">Nuestros empleados</a>
                    <i class="caret fa-solid fa-angle-down"></i>
                    <ul class="sub-menu">
                        <li><a href="">Colilla de pagos y certificados laborales</a></li>
                        <li><a href="">Seguridad y salud en el trabajo</a></li>
                        <li><a href="">Talento humano</a></li>
                    </ul>
                </li>
                <li class="link-nav {{setActive("trabaja-con-nosotros")}}">
                    <a href="/trabaja-con-nosotros">Trabaje con nosotros</a>
                    <i class="caret fa-solid fa-angle-down"></i>
                    <ul class="sub-menu">
                        <li><a href="/trabaja-con-nosotros/ofertas-laborales">Ofetas laborales</a></li>
                        <li><a href="/trabaja-con-nosotros">Enviar hoja de vida</a></li>
                        
                    </ul>
                </li>
                <li class="link-nav"><a href="">Contacto</a></li>
            </ul>
        </nav>
       
          <div class="content-landing">@yield('content')</div>

          <footer>
            <div class="main-content-footer">
                <h1 class="title-footer">Estamos aquí</h1>
                <div class="bx-footer">
                    <div class="col-1-footer">
                        <div class="content-col-1-footer"> 
                            <h1>Lorem, ipsum.</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse expedita tempore, beatae omnis pariatur ut a eum adipisci quaerat consequatur nostrum harum eveniet neque fugit accusamus aliquid perspiciatis ducimus non fugiat nam autem commodi voluptatum repellendus placeat! Delectus, quae perspiciatis.</p>
                        </div>
                        <div class="content-col-1-footer">
                            <h1>Nuestra oferta</h1>
                            <ul class="ofertas-menu">
                                <li><a href="">Negocios especializados</a></li>
                                <li><a href="">Selección de personal</a></li>
                                <li><a href="">Visita domiciliaria</a></li>
                                <li><a href="">Estudio de seguridad</a></li>
                                <li><a href="">Prueba de poligrafía</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2-footer">
                        <div class="content-col-2-footer"> 
                            <img src="/img/mainNav.png" alt="">
                        </div>
                        <div class="content-col-2-footer"> 
                            <h1>Contáctanos</h1>
                            <p><strong>Dirección:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sit voluptas quam velit, cum voluptatem odio quaerat fugiat facere unde.</p>
                                <br>
                            <p><strong>PBX:</strong>80808080</p>
                            <a class="btn-blog" href="#">PQRSF</a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="copyright">
                <div class="social">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    
                    
                </div>
                
                <p>Lorem, ipsum dolor. {{date("Y")}} - Derechos Reservados &copy;.</p>
                <button class="go-toTop"><i class="fa-solid fa-chevron-up"></i></button>
            </div>
          </footer>

          <script src="/js/adminlte/jquery.min.js"></script>
       <script src="/js/main.js"></script>

    </body>
</html>
