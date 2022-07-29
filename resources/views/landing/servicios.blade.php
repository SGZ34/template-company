@extends('layouts.landing')

@section('title')
    servicios
@endsection

@section('content')
    <header id="servicios">
        <div class="content-header-servicios">
            <h1>Nuestros servicios</h1>
        </div>
    </header>

    <section>
        <div class="container-services">
            <div>
                <h2>Nuestros servicios</h2>
                <h3>Comprometidas con nuestro labor</h3>
                <p>En <span>GRTEMPORALES</span> contamos con un equipo humano especializados para garantizar el cumplimiento de nuestra labor; ofreciendo soluciones en Recursos Humanos a organizaciones que requieran nuestros servicios a través de una selección minuciosa del personal que cumpla los requisitos establecidos y que se adecue al perfil profesional requerido por cada uno de nuestros clientes.</p>
            </div>
            <img src="/img/team-service.png" alt="">
        </div>
    </section>
    <section>
        <div class="container-cards-services">
            <div class="card-service">
                <img src="/img/card-service1.png" alt="">
                    <div class="container-text">
                        <h3>Negocios Especializados</h3>
                    <p>A través GRTEMPORALES seleccionamos el personal adecuado en áreas administrativas mandos medios, directivos y técnicos, para todo tipo de empresas en una amplia gama de sectores.</p>
                    </div>
            </div>
            <div class="card-service">
                <img src="/img/card-service2.png" alt="">
                    <div class="container-text">
                        <h3>Selección Personal</h3>
                    <p>En GRTEMPORALES, desarrollamos un proceso técnico Profesional de selección que consiste en una serie de actividades, desde conseguir los candidatos, hasta evaluar quienes de ellos se ajustan al perfil requerido por la empresa. Nuestro proceso se realiza de la siguiente manera:</p> 
                    
                    <ol class="list">
                        <li>LEVANTAMIENTO PRESENCIAL O VIRTUAL DEL PERFIL</li>
                        <li>RECLUTAMIENTO</li>
                        <li>APLICACIÓN DE PRUEBA</li>
                        <li>ENTREVISTA</li>
                        <li>REFERENCIACIÓN</li>
                        <li>INFORME DE SELECCIÓN</li>
                        <li>PRESENTACIÓN DE CANDIDATOS</li>
                    </ol>
                     
                    </div>
            </div>
            <div class="card-service">
                <img src="/img/card-service3.png" alt="">
                    <div class="container-text">
                        <h3>Visita Domiciliaria
                        </h3>
                        <p>En la VISITA DOMICILIARIA verificamos los datos personales, originalidad de los documentos, información familiar, historia familiar, vivienda, influencia de grupos delincuenciales, referencias laborales etc. Al culminar este proceso suministramos toda la información de la persona, incluyendo todas las características de la persona y su entorno familiar, social y las conclusiones que arroja este estudio en especial. Dada la responsabilidad de la visita, esta se realiza directamente con la persona y los funcionarios de nuestro departamento.</p>
                    </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-footer-cards-services">
            <div class="footer-card-service">
                <img src="/img/card-footer-service1.png" alt="">
                <div class="container-text-card-footer-service">
                    <h3>Estudio de Seguridad</h3>
                <p>Buscamos en primera instancia indagar sobre antecedentes judiciales y establecer la plena identidad del candidato. Adicionalmente, establecemos la autenticidad de sus documentos de identidad: libreta militar, certificado judicial, así como también documentos académicos como diplomas y actas de grado. Al culminar este proceso suministramos toda la información de la persona, así también como el concepto técnico sobre el resultado y las conclusiones arrojadas en el estudio.</p>
                </div>
            </div>
            <div class="footer-card-service">
                <img src="/img/card-footer-service2.png" alt="">
                <div class="container-text-card-footer-service">
                    <h3>Prueba de Poligrafía
                    </h3>
                    <p>Ofrecemos a todos nuestros clientes este servicio, con el propósito de generarle la mayor confianza posible en la contratación de personal idóneo para el cargo requerido, con proveedores certificados en el área.</p>
                </div>
            </div>
        </div>
    </section>
@endsection