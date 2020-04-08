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
                    <strong>Message sent. </strong>We will be in touch soon.
                </div>
            @endif
            <h1>SEBASTIAN NAVARRETE</h1>
            <h1><span>SOFTWARE DEVELOPER</span></h1>
            <p>I consider myself a proactive and resilient person, who never stops learning.
                <br> I am always looking to provide solutions and generating value through technology.</p>
            <div class="social-icons">
                <ul class="list-inline">
                    <li>
                        <a target="_blank" href="https://co.linkedin.com/in/sebasnavarrete">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
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
                    <a class="navbar-brand">{!! HTML::image("assets/images/logo.png") !!}</a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Profile</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#works">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div><!-- .container -->
        </nav>
    </header><!-- End Navigation -->


    <!-- About Section -->
    <section id="about" class="about-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">PROFESSIONAL PROFILE</h2>

            <div class="row">

                <div class="col-md-4 col-md-push-8">
                    <div class="biography">
                        <ul>
                            <li class="profile-img">{!! HTML::image("assets/images/pic.jpg") !!}</li>
                            <li>
                                <strong>Name:</strong> Sebastian Navarrete
                            </li>
                            <li>
                                <strong>Phone:</strong>
                                <a style="color: #000;" href="tel:+573134737213">(+57) 313 4737213</a>
                            </li>
                            <li>
                                <strong>Email:</strong>
                                <a style="color: #000;" href="mailto:info@sebastian-navarrete.com">info@sebastian-navarrete.com</a>
                                <a style="color: #000;" href="mailto:sebasnavarrete.2@gmail.com">sebasnavarrete.2@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- col-md-4 -->

                <div class="col-md-8 col-md-pull-4">

                    <div class="short-info wow fadeInUp">
                        <h3>Profile</h3>
                        <p>
                            I'm Systems Engineer and Project Management specialist.
                            Fullstack developer seeking to apply good development practices, readable and clean code.
                            Always looking for optimal and innovative solutions and ready to learn new technologies.
                            My skills are:
                        </p>

                        <ul class="list-check">
                            <li>Symfony - Laravel - Codeigniter - ExpressJs</li>
                            <li>HTML5 - CSS3 - Bootstrap - Material Design</li>
                            <li>PHP - NodeJS - MySQL - PostgreSQL</li>
                            <li>Javascript - Jquery - Angular - React</li>
                            <li>Linux - AWS - Google Cloud</li>
                            <li>Ionic - PowerBI - Google Data Studio</li>
                            <li>SCRUM</li>
                            <li>GIT</li>
                        </ul>
                    </div>

                    <div class="download-button">
                        <a class="btn btn-info btn-lg" href="#contact"><i class="fa fa-paper-plane"></i>Contact me</a>
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
                        <h2 style="line-height: 40px;">
                            Do you have an idea or project? I can support you.
                        </h2>
                        <a href="#contact" class="btn btn-default">Let's talk!</a>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.hire-section-bg -->
    </section><!-- End Hire Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills-section section-padding">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Skills</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="skill-progress">
                        <div class="skill-title"><h6>Symfony - Laravel - Codeigniter - NodeJS</h6></div>
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
                        <div class="skill-title"><h6>C# - .NET - SQL Server</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100"><span>60%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                    <div class="skill-progress">
                        <div class="skill-title"><h6>Javascript - Jquery - Angular</h6></div>
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
                        <div class="skill-title"><h6>Ionic - Cordova</h6></div>
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100"><span>100%</span>
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.skill-progress -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->

            <div class="skill-chart text-center">
                <h3>Other Skills</h3>
            </div>

            <div class="row more-skill text-center">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="chart" data-percent="80" data-color="e74c3c">
                        <span class="percent"></span>
                        <div class="chart-text">
                            <span>SCRUM</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="chart" data-percent="90" data-color="2ecc71">
                        <span class="percent"></span>
                        <div class="chart-text">
                            <span>GIT</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="chart" data-percent="80" data-color="3498db">
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
            <h2 class="section-title wow fadeInUp">Some of my projects / Clients</h2>

            <ul class="list-inline" id="filter">
                <li><a class="active" data-group="all">All</a></li>
                <li><a class="active" data-group="web">Web</a></li>
                <li><a class="active" data-group="mobile">Mobile</a></li>
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
                                {!! HTML::image("assets/images/parnam.png") !!}
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
                                {!! HTML::image("assets/images/deled.png") !!}
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
                                {!! HTML::image("assets/images/soluntech.png") !!}
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
                                {!! HTML::image("assets/images/2w.png") !!}
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
                                {!! HTML::image("assets/images/lyncros.png") !!}
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
                                {!! HTML::image("assets/images/3d.png") !!}
                                <div class="portfolio-info">
                                    <h3>3D al cubo</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "web", "mobile"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="https://www.pingpro.com/"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("assets/images/pp.jpg") !!}
                                <div class="portfolio-info">
                                    <h3>PingPro</h3>
                                </div><!-- /.portfolio-info -->
                            </div><!-- /.portfolio -->
                        </div><!-- /.portfolio-bg -->
                    </div><!-- /.portfolio-item -->
                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "web"]'>
                        <div class="portfolio-bg">
                            <div class="portfolio">
                                <div class="tt-overlay"></div>
                                <div class="links">
                                    <a target="_blank" href="https://www.4wplus.org"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                                {!! HTML::image("assets/images/4wplus.png") !!}
                                <div class="portfolio-info">
                                    <h3>4wPlus - iMMAP - OCHA</h3>
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
            <h2 class="section-title wow fadeInUp">Contact</h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <strong>Send Message</strong>
                        {!! FORM::open(['route' => 'send', 'method' => 'post']) !!}
                        <div class="form-group">
                            <label for="InputName1">Name</label>
                            <input type="text" name="name" class="form-control" id="InputName1" required>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="InputEmail1" required>
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Subject</label>
                            <input type="text" name="subject" class="form-control" id="InputSubject" required>
                        </div>
                        <div class="form-group">
                            <label for="InputTextarea">Message</label>
                            <textarea name="body" class="form-control" id="InputTextarea" rows="5" required></textarea>
                        </div>
                        <div data-callback="callbackCaptcha" class="g-recaptcha"
                             data-sitekey="6LczJg8UAAAAACYkGYO1YsHNYmgzDNydAFidMAnF"></div>
                        <button disabled id="formContactSubmit" type="submit" name="submit" class="btn btn-primary">
                            Send
                        </button>
                        </form>
                    </div>
                </div><!-- /.col-md-6 -->

                <div class="col-sm-6">
                    <i class="fa fa-mobile"></i>
                    <div class="contact-number">
                        <strong>Phone</strong>
                        <a style="color: #000;" href="tel:+573134737213">(+57) 313 4737213</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection