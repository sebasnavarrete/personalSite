<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hoja de Vida Sebastian Navarrete">
    <meta name="author" content="Sebastian Navarrete">

    <title>Sebastian Navarrete</title>
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    {!! HTML::style('public/assets/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome CSS -->
    {!! HTML::style('public/assets/css/font-awesome.min.css') !!}
    <!-- Animate css -->
    {!! HTML::style('public/assets/css/animate.css') !!}
    <!-- Magnific css -->
    {!! HTML::style('public/assets/css/magnific-popup.css') !!}
    <!-- Custom styles CSS -->
    {!! HTML::style('public/assets/css/style.css') !!}
    <!-- Responsive CSS -->
    {!! HTML::style('public/assets/css/responsive.css') !!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="assets/images/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">

</head>

@yield('content')

<!-- Footer Section -->
<footer class="footer-wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="copyright text-center">
                <p>&copy; Sebastian Navarrete 2016.</p>
            </div>
        </div>
    </div>
</div>
</footer><!-- End Footer Section -->


<!-- Scroll-up -->
<div class="scroll-up">
<a href="#home"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Javascript files -->
{!! HTML::script('public/assets/js/jquery.js') !!}
{!! HTML::script('public/assets/bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('public/assets/js/jquery.stellar.min.js') !!}
{!! HTML::script('public/assets/js/jquery.sticky.js') !!}
{!! HTML::script('public/assets/js/smoothscroll.js') !!}
{!! HTML::script('public/assets/js/wow.min.js') !!}
{!! HTML::script('public/assets/js/jquery.countTo.js') !!}
{!! HTML::script('public/assets/js/jquery.inview.min.js') !!}
{!! HTML::script('public/assets/js/jquery.easypiechart.js') !!}
{!! HTML::script('public/assets/js/jquery.shuffle.min.js') !!}
{!! HTML::script('public/assets/js/jquery.magnific-popup.min.js') !!}
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
{!! HTML::script('public/assets/js/jquery.fitvids.js') !!}
{!! HTML::script('public/assets/js/scripts.js') !!}
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72659243-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>