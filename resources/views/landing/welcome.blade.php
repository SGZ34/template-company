@extends('layouts.landing')

@section('title')
    Inicio
@endsection

@section('content')
    <header >
        <div class="content-header">
                <div class="content-text-header">
                    <h1>Lo que estás buscando, te ayudamos a encontrarlo <a href="/trabaja-con-nosotros/ofertas-laborales">aquí</a>.</h1>
                <h6>Habla con nosotros en vivo y encuentra lo que necesitas en segundos</h6>
                <a href="" class="btn-header">Quiero ver más</a>
                </div>
        </div>
    </header>

    <section>
        <h1>Nuestros servicios</h1>
        <div class="row-card">
            <div class="card-services">
                <img src="/img/card-1-services.png" alt="">
                <h3>Negocios especializados
                </h3>
                <p>A través GR Temporales seleccionamos el personal adecuado en áreas administrativas mandos medios, directivos y técnicos, para todo tipo de empresas en una amplia gama de sectores...</p>
                <a class="btn-card-service" href="">Ver más</a>
            </div>
            <div class="card-services">
                <img src="/img/card-2-services.png" alt="">
                <h3>Selección personal
                </h3>
                <p>Desarrollamos un proceso técnico profesional en selección de personal óptimo que se ajusten al perfil requerido por la compañía.</p>
                <a class="btn-card-service" href="">Ver más</a>
            </div>
            <div class="card-services">
                <img src="/img/card-3-services.png" alt="">
                <h3>Visita domiciliaria
                </h3>
                <p>A través de una exhaustiva verificación de los datos personales del postulado, suministramos todas las conclusiones pertinentes que arroja el estudio permitiendo seleccionar al personal más calificado para el perfil requerido.

                </p>
                <a class="btn-card-service" href="">Ver más</a>
            </div>
            <div class="card-services">
                <img src="/img/card-4-services.png" alt="">
                <h3>Estudio de seguridad
                </h3>
                <p>Con el estudio Técnico de Seguridad buscamos en primera instancia indagar sobre los antecedentes judiciales y establecer la plena identidad de la persona a contratar.</p>
                <a class="btn-card-service" href="">Ver más</a>
            </div>
            <div class="card-services">
                <img src="/img/card-5-services.png" alt="">
                <h3>Prueba de poligrafía
                </h3>
                <p>Ofrecemos a todos nuestros clientes el servicio de Poligrafía con el propósito de generarles una mayor confianza en la contratación del personal requerido.</p>
                <a class="btn-card-service" href="">Ver más</a>
            </div>
        </div>
    </section>
    
    <section id="bienvenidos">
        <div class="container-bienvenidos">
            <img src="/img/bienvenidos.png" alt="">
            <div class="container-bienvenidos-text">
                <h3>Bienvenidos</h3>
                <h4>¡Somos su mejor alternativa!</h4>
                <p>En GRTEMPORALES, ofrecemos respaldo y compromiso en nuestra labor, así mismo un talento humano con experiencia y la formación necesaria que su compañía requiere para la adecuada prestación de nuestros servicios. Entendemos ampliamente la dinámica del mercado laboral y contamos con reclutadores experimentados en atracción y evaluación de todo tipo de perfiles.</p>
                
            </div>
        </div>
    </section>

    <section>
        <h1>Indicadores</h1>
        <div class="indicadores-row">
            <div class="card-indicador">
                <img src="/img/indicador1.png" alt="">
                <h5>Colaboradores comprometidos con la excelente prestación de nuestros servicio.</h5>
            </div>
            <div class="card-indicador">
                <img src="/img/indicador2.png" alt="">
                <h5>Colaboradores comprometidos con la excelente prestación de nuestros servicio.</h5>
            </div>
            <div class="card-indicador">
                <img src="/img/indicador3.png" alt="">
                <h5>Clientes que han confiado en nosotros y seguimos creciendo.</h5>
            </div>
        </div>
    </section>
    <section>
        <h1>Nuestro blog</h1>
        <div class="blog-row">
            <div class="card-blog" >
                <div class="card-header-blog">
                    <a href=""><img src="img/blog1.png" alt=""></a>
                    <h6><a href="">¿Cómo puede ayudarte una temporal de trabajo a optimizar los procesos de tu empresa?</a></h6>
                </div>
                <p>¿Cómo puede una temporal de trabajo ayudarte a optimizar los procesos de tu empresa?</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog2.png" alt=""></a>
                    <h6><a href="">Contrataciones temporales en empresas pequeñas: ¿SÍ o NO?</a></h6>
                </div>
                <p>Cualquier empresa, sin importar el tamaño, seguramente ha escuchado sobre la función que tienen las empresas temporales como una ayuda ...</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog2.png" alt=""></a>
                    <h6><a href="">¿Cómo funcionan las temporales de trabajo?</a></h6>
                </div>
                <p>Sabemos que hacer tus procesos de contratación puede ser todo un reto y que todavía no entiendes bien cómo es ...</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog3.png" alt=""></a>
                    <h6><a href="">5 problemas que le trae la alta rotación de personal a tu empresa</a></h6>
                </div>
                <p>El mundo empresarial es un universo complejo, donde hay mucho en riesgo y todos quieren trabajar teniendo las mejores ganancias, ...
                </p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog4.png" alt=""></a>
                    <h6><a href="">Cuál es la solución para tu contratación en temporada navideña</a></h6>
                </div>
                <p>¿La contratación para la temporada navideña no resultó ser tan fácil como esperabas? Bien sea por cuestiones post-pandémicas u otros ...</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog5.png" alt=""></a>
                    <h6><a href="">¿Tienes mucha rotación de personal en la temporada decembrina?</a></h6>
                </div>
                <p>Sabemos que ya empezó la temporada decembrina y muchas empresas como la tuya pueden estar necesitando personal para poder cubrir ...</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog6.png" alt=""></a>
                    <h6><a href="">¿Estás buscando personal para diciembre y enero?</a></h6>
                </div>
                <p>Con la llegada de diciembre y enero, llega el aumento en la demanda de productos y servicios en casi todos ...</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog7.png" alt=""></a>
                    <h6><a href="">Conoce cómo contratar el personal ideal para tu empresa</a></h6>
                </div>
                <p>5 tips infaltables en el proceso de selección.  El éxito de tu empresa depende de muchos factores como la calidad ...</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog8.png" alt=""></a>
                    <h6><a href="">La selección de personal, el primer paso para una empresa exitosa</a></h6>
                </div>
                <p>La selección de personal es quizá el trabajo más importante y a la vez el más arduo para llevar a ...</p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
            <div class="card-blog">
                <div class="card-header-blog">
                    <a href=""><img src="img/blog9.png" alt=""></a>
                    <h6><a href="">¿Estás teniendo un trabajo tóxico?</a></h6>
                </a>
                <p>¿Sabías que, según estudios, el 61% de los empleados considera que el estrés laboral les ha generado alguna enfermedad y ...
                </p>
                <a href="" class="btn-blog">Leer más</a>
            </div>
        </div>
    </section>
@endsection