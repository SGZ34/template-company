<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GR Temporales - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="/img/icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/css/animations/animate.min.css">
        <link rel="stylesheet" href="/css/styles.css">
        
        
    </head>
    <body>
        
        <nav class="nav">
            <img src="/img/menu.svg" alt="" class="icon-menu">
            <a class="icon" href="/">
                <img src="/img/mainNav.png" alt="Icono y título de GR Temporales">
            </a>
            <ul class="menu">
                <li class="link-active"> <a href="">Inicio </a></li>
                <li><a href="">Sobre nosotros</a></li>
                <li><a href="">Servicios</a></li>
                <li><a href="">Documentos</a></li>
                <li><a href="">Nuestros empleados </a>
                    <ul class="sub-menu">
                        <li><a href="">Colilla de pagos y certificados laborales</a></li>
                        <li><a href="">Seguridad y salud en el trabajo</a></li>
                        <li><a href="">Talento humano</a></li>
                    </ul>
                </li>
                <li><a href="">Trabaje con nosotros</a>
                    <ul class="sub-menu">
                        <li><a href="">Ofetas laborales</a></li>
                        <li><a href="">Enviar hoja de vida</a></li>
                        
                    </ul>
                </li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
       
          @yield('content')

          <footer>
            <div class="main-content-footer">
                <h1 class="title-footer">Estamos aquí</h1>
                <div class="bx-footer">
                    <div class="col-1-footer">
                        <div class="content-col-1-footer"> 
                            <h1>GR TEMPORALES</h1>
                            <p>En GR Temporales suministramos soluciones en la administración del talento humano, de personal en misión, trabajando en conjunto con nuestros clientes en la búsqueda idónea del perfil que se requiera. Ofreciendo candidatos con experiencia, formación, compromiso y pertenencia. Asegurándonos de ofrecer la satisfacción del personal a nuestro cargo y de cada uno de nuestros clientes.</p>
                        </div>
                        <div class="content-col-1-footer">
                            <h1>Nuestra oferta</h1>
                            <ul>
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
                            <img src="/img/icono_blanco.png" alt="">
                        </div>
                        <div class="content-col-2-footer"> 
                            <h1>Contáctanos</h1>
                            <p><strong>Dirección:</strong> Carrera 79 B No. 45 D-12 Barrio los Olivos
                                (Una cuadra abajo de la Plaza La América por la canalización).</p>
                                <br>
                            <p><strong>PBX:</strong>(57-4) 444 81 20</p>
                            <a class="btn-blog" href="#">PQRSF</a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="copyright">
                <img src="" alt="">
                <p>GR Temporales S.A.S {{date("Y")}} - Derechos Reservados &copy;.</p>
                <button class="go-toTop">^</button>
            </div>
          </footer>

          <script src="/js/adminlte/jquery.min.js"></script>
       <script src="/js/main.js"></script>

    </body>
</html>
