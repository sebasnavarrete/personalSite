@extends('base.layout')
@section('content')
    <body>
    <!-- Preloader -->
    <div id="tt-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>


    <!-- Home Section -->
    <section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
        <div class="intro">
            @if (Session::has('send'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Mensaje enviado. </strong>Pronto estaremos en contacto.
                </div>
            @endif
            <div class="intro-sub">SEBASTIAN NAVARRETE</div>
            <h1>EMPRENDEDOR</h1>
            <h1><span>DESARROLLADOR DE SOFTWARE</span></h1>

            <p>Ingeniero de Sistemas proactivo, creativo, emprendedor, responsable y comprometido <br> Desarrollador
                Front-end &amp; Back-end y aplicando las mejores practicas <br> Siempre buscando soluciones óptimas y
                dispuesto a aprender nuevas tecnologías.</p>

            <div class="social-icons">
                <ul class="list-inline">
                    <li><a target="_blank" href="https://www.facebook.com/sebasnavarrete"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a target="_blank" href="https://twitter.com/Sebas_Navarrete"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a target="_blank" href="https://co.linkedin.com/in/sebastián-navarrete-05877086"><i
                                    class="fa fa-linkedin"></i></a></li>
                </ul>
            </div> <!-- /.social-icons -->
        </div>

        <div class="mouse-icon">
            <div class="wheel"></div>
        </div>
    </section><!-- End Home Section -->


    <!-- Navigation -->
    <header class="header">
        <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">{!! HTML::image("public/assets/images/logo.png") !!}</a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Inicio</a></li>
                        <li><a href="#about">Sebastian</a></li>
                        <li><a href="#resume">Resumen</a></li>
                        <li><a href="#skills">Habilidades</a></li>
                        <li><a href="#works">Clientes</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div><!-- .container -->
        </nav>
    </header><!-- End Navigation -->


    <!-- About Section -->
    <section id="about" class="about-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">PERFIL PROFESIONAL</h2>

            <div class="row">

                <div class="col-md-4 col-md-push-8">
                    <div class="biography">
                        <ul>
                            <li><strong>Nombre:</strong> Sebastian Navarrete</li>
                            <li><strong>Nacionalidad:</strong> Colombiano</li>
                            <li><strong>Teléfono:</strong> <a style="color: #000;" href="tel:+573134737213">(+57) 313 4737213</a></li>
                            <li><strong>Correo:</strong>
                                <a style="color: #000;" href="mailto:info@sebastian-navarrete.com">info@sebastian-navarrete.com</a></li>
                            <li><strong><a href="https://www.workana.com/freelancer/4a50061ebd0de10427fa75ec670d45da">Sitio
                                        Freelancer</a></strong></li>
                        </ul>
                    </div>
                </div> <!-- col-md-4 -->

                <div class="col-md-8 col-md-pull-4">

                    <div class="short-info wow fadeInUp">
                        <h3>Perfil</h3>
                        <p>
                            Ingeniero de sistemas proactivo, creativo, responsable y comprometido con su trabajo,
                            siempre buscando aprender acerca de nuevas tecnologías y aplicar las mejores prácticas.
                            Habilidades y experiencia en:
                        </p>

                        <ul class="list-check">
                            <li>Laravel - Codeigniter - Java</li>
                            <li>HTML5 - CSS3 - Bootstrap</li>
                            <li>PHP - MySQL - PostgreSQL</li>
                            <li>C# - .NET - SQL Server</li>
                            <li>Javascript - Jquery - AngularJS</li>
                            <li>SCRUM</li>
                            <li>GIT</li>
                            <li>Responsive Web Design - Web Performance</li>
                            <li>Linux</li>
                            <li>Ionic</li>
                        </ul>
                    </div>

                    <div class="download-button">
                        <a class="btn btn-info btn-lg" href="#contact"><i class="fa fa-paper-plane"></i>Enviar
                            Mensaje</a>
                        {{--<a target="_blank" class="btn btn-primary btn-lg" href="public/assets/hv.pdf"><i class="fa fa-download"></i>Descargar Hoja de Vida</a>--}}
                    </div>
                </div>


            </div> <!-- /.row -->
        </div> 
    </section><!-- End About Section -->


    <!-- Hire Section -->
    <section class="hire-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
        <div class="hire-section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Disponible para proyectos Independientes y Empresariales</h2>
                        <a href="#contact" class="btn btn-default">Enviar Mensaje</a>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.hire-section-bg -->
    </section><!-- End Hire Section -->


    <!-- Resume Section -->
    <!--<section id="resume" class="resume-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">RESUMEN</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="resume-title">
                        <h3>Formación Académica</h3>
                    </div>
                    <div class="resume">
                        <ul class="timeline">
                            <li>
                                <div class="posted-date">
                                    <span class="month">2008</span>
                                </div>

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Bachiller</h3>
                                            <span>Colegio Agustiniano</span>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="posted-date">
                                    <span class="month">2013</span>
                                </div>

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3> Certificación </h3>
                                            <span>CMMI, con integración a metodologías PSP, TSP y agiles (Scrum). SEONTI</span>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="posted-date">
                                    <span class="month">2016</span>
                                </div>

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Ingeniero de sistemas</h3>
                                            <span>Universidad Industrial de Santander</span>
                                        </div>
                                    </div> 
                                </div> 
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="resume-title">
                        <h3>Experiencia Laboral</h3>
                    </div>
                    <div class="resume">
                        <ul class="timeline">
                            <li class="timeline-inverted">
                                <div class="posted-date">
                                    <span class="month">2013</span>
                                </div>

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Desarrollador</h3>
                                            <span>Independiente</span>
                                        </div>

                                        <div class="timeline-body">
                                            <p>Desarrollo de soluciones web para diferentes sectores empresariales.</p>
                                        </div>
                                    </div> 
                                </div> 
                            </li>

                            <li>
                                <div class="posted-date">
                                    <span class="month">2015</span>
                                </div>

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Desarrollador</h3>
                                            <span>Programing WebSoft</span>
                                        </div>

                                        <div class="timeline-body">
                                            <p>Desarrollo de soluciones web.</p>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="posted-date">
                                    <span class="month">2015</span>
                                </div>

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Desarrollador - Practicante</h3>
                                            <span>IBM DE COLOMBIA</span>
                                        </div>

                                        <div class="timeline-body">
                                            <p>Desarrollo de soluciones web.</p>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="posted-date">
                                    <span class="month">2016</span>
                                </div>

                                <div class="timeline-panel wow fadeInUp">
                                    <div class="timeline-content">
                                        <div class="timeline-heading">
                                            <h3>Emprendedor - Fullstack Developer</h3>
                                            <span>Independiente</span>
                                        </div>

                                        <div class="timeline-body">
                                            <p>Desarrollo de soluciones web y mobile para diferentes sectores
                                                empresariales.</p>
                                            <p>
                                                <a href="https://www.workana.com/freelancer/4a50061ebd0de10427fa75ec670d45da"
                                                   target="_blank">Sitio Web Freelancer</a></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!-- End Resume Section -->


    <!-- Skills Section -->
    <section id="skills" class="skills-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Habilidades</h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="skill-progress">
                        <div class="skill-title"><h6>Laravel - Codeigniter </h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100"><span>95%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->

                    <div class="skill-progress">
                        <div class="skill-title"><h6>HTML5 - CSS3 - Bootstrap - Material Design</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100"><span>90%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                    <div class="skill-progress">
                        <div class="skill-title"><h6>PHP - MySQL - PostgreSQL</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100"><span>95%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                    <div class="skill-progress">
                        <div class="skill-title"><h6>Web Performance</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100"><span>95%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="skill-progress">
                        <div class="skill-title"><h6>C# - .NET - SQL Server - JAVA</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100"><span>80%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                    <div class="skill-progress">
                        <div class="skill-title"><h6>Javascript - Jquery - AngularJS</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100"><span>95%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                    <div class="skill-progress">
                        <div class="skill-title"><h6>Responsive Web Design</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100"><span>95%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                    <div class="skill-progress">
                        <div class="skill-title"><h6>Ionic - Phonegap</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100"><span>95%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->

            <div class="skill-chart text-center">
                <h3>Otras Habilidades</h3>
            </div>

            <div class="row more-skill text-center">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="chart" data-percent="90" data-color="e74c3c">
                        <span class="percent"></span>
                        <div class="chart-text">
                            <span>SCRUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="chart" data-percent="95" data-color="2ecc71">
                        <span class="percent"></span>
                        <div class="chart-text">
                            <span>GIT</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="chart" data-percent="90" data-color="3498db">
                        <span class="percent"></span>
                        <div class="chart-text">
                            <span>Linux</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- Works Section -->
    <section id="works" class="works-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Clientes</h2>

            <ul class="list-inline" id="filter">
                <li><a class="active" data-group="all">Todos</a></li>
                <li><a class="active" data-group="web">Web</a></li>
                <li><a class="active" data-group="mobile">Móvil</a></li>
            </ul>

            <div class="row">
                <div id="grid">
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3"
                         data-groups='["all", "shop", "web", "mobile"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="http://parnam.com.co/es/"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("public/assets/images/parnam.png") !!}
                                <div class="portfolio-info">
                                    <h3>Parnam LTDA</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "shop", "web"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="http://deledweb.com/"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("public/assets/images/deled.png") !!}
                                <div class="portfolio-info">
                                    <h3>Deled</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "web", "mobile"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="http://www.soluntech.com/"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("public/assets/images/soluntech.png") !!}
                                <div class="portfolio-info">
                                    <h3>Soluntech</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "web"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="http://www.2w.net/"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("public/assets/images/2w.png") !!}
                                <div class="portfolio-info">
                                    <h3>2w - Agencia Digital</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "web", "mobile"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="http://www.lyncros.com/es"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("public/assets/images/lyncros.png") !!}
                                <div class="portfolio-info">
                                    <h3>Lyncros</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "web", "mobile"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="http://3dalcubo.com/"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("public/assets/images/3d.png") !!}
                                <div class="portfolio-info">
                                    <h3>3D al cubo</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /#grid -->
            </div><!-- /.row -->
        </div>
    </section><!-- End Works Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Contacto</h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <strong>Enviar Mensaje</strong>
                        {!! FORM::open(['route' => 'send', 'method' => 'post']) !!}
                        <div class="form-group">
                            <label for="InputName1">Nombre</label>
                            <input type="text" name="name" class="form-control" id="InputName1" required="">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Correo</label>
                            <input type="email" name="email" class="form-control" id="InputEmail1" required="">
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Asunto</label>
                            <input type="text" name="subject" class="form-control" id="InputSubject">
                        </div>
                        <div class="form-group">
                            <label for="InputTextarea">Mensaje</label>
                            <textarea name="body" class="form-control" id="InputTextarea" rows="5"
                                      required=""></textarea>
                        </div>
                        <div data-callback="callbackCaptcha" class="g-recaptcha"
                             data-sitekey="6LczJg8UAAAAACYkGYO1YsHNYmgzDNydAFidMAnF"></div>
                        <button id="formContactSubmit" disabled type="submit" name="submit" class="btn btn-primary">
                            Enviar
                        </button>
                        </form>
                    </div>
                </div><!-- /.col-md-6 -->

                <div class="col-sm-6">
                    <i class="fa fa-mobile"></i>
                    <div class="contact-number">
                        <strong>Teléfono</strong>
                        <a style="color: #000;" href="tel:+573134737213">(+57) 313 4737213</a>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- /.row -->
        </div>
    </section><!-- End Contact Section -->
@endsection