@extends('layouts.front.theme')


@section("content")
@php($path = 8)
@svg($path)
<div class="container-xxl bg-primary hero-header">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Aprender nuevas tecnologías</h1>
                <p class="text-white pb-3 animated slideInDown">Existen numerosos recursos disponibles para aprender nuevas tecnologías, desde cursos en línea hasta tutoriales y comunidades en línea. Aprovecha estos recursos y encuentra el enfoque de aprendizaje que mejor se adapte a ti</p>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="front/img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">Explora proyectos prácticos<span></span></p>
                <h1 class="mb-5">No temas hacer preguntas y buscar la ayuda de la comunidad. La colaboración y el intercambio de conocimientos son fundamentales en el aprendizaje de nuevas tecnologías</h1>
                
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Miles de ejemplos de código utilizados en proyectos reales</p>
                        <p class="mb-2">85%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Aprendizaje inmersivo que te sumerge en el mundo de la programación</p>
                        <p class="mb-2">90%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Pruebas gamificadas que fortalecen tus habilidades de programación</p>
                        <p class="mb-2">95%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="front/img/about.png">
            </div>
        </div>
    </div>
</div>


<!-- About End -->


<!-- Facts Start -->
<div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-code fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                <p class="text-white mb-0">Líneas de código</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-user fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                <p class="text-white mb-0">Desarrolladores</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-flask fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                <p class="text-white mb-0">Proyectos completados</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-globe fa-3x text-secondary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                <p class="text-white mb-0">Usuarios activos</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Por qué NextEducation<span></span></p>
            <h1 class="text-center mb-5">Por qué te encantará aprender con NextEducation</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-search fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Efectivo y eficiente</h5>
                    <p class="m-0">Nuestros cursos enseñan de manera efectiva y eficiente habilidades de programación. ¡Echa un vistazo a nuestras últimas investigaciones!</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-laptop-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Aprendizaje personalizado</h5>
                    <p class="m-0">Combina lo mejor de la inteligencia artificial y la ciencia de la programación para adaptar las lecciones a tu nivel y ritmo de aprendizaje.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Mantente motivado</h5>
                    <p class="m-0">Facilitamos la creación del hábito de programar, con características lúdicas, desafíos divertidos y recordatorios de nuestro amigable mascota, Codey el unicornio.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-mail-bulk fa-2x"></i>
                    </div>
                    <h5 class="mb-3">¡Diviértete con ello!</h5>
                    <p class="m-0">El aprendizaje de programación no tiene por qué ser aburrido. Desarrolla tus habilidades cada día con ejercicios interactivos y personajes animados.</p>
                    <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Curso<span></span></p>
            <h1 class="text-center mb-5">Todos nuestros cursos</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">Todos</li>
                    @forelse ($departments as $department)
                        <li class="mx-2" data-filter=".department-{{ $department->id }}">{{ $department->title }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="row g-3 portfolio-container">
            <!-- course Start -->
                @if(count($courses) > 1)
                <div class="container-xxl py-5">
                    <div class="container py-5 px-lg-5">
                        <div class="row g-4">
                            @forelse ($courses as $course)
                                <x-front.course :course="$course"/>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
                @endif
            <!-- course End -->
        </div>
    </div>
</div>
<!-- Projects End -->

@endsection