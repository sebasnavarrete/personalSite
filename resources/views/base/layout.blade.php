<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desarrollo de software web y móvil con múltiples tecnologías">
    <meta name="author" content="SN Software">
    <link rel="apple-touch-icon" sizes="57x57" href="public/assets/images/ico/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/assets/images/ico/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/assets/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/images/ico/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/assets/images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/assets/images/ico/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/assets/images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/assets/images/ico/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/images/ico/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="public/assets/images/ico/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="public/assets/images/ico/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="public/assets/images/ico/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="public/assets/images/ico/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="public/assets/images/ico/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="public/assets/images/ico/manifest.json">
    <link rel="mask-icon" href="public/assets/images/ico/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="public/assets/images/ico/favicon.ico">
    <title>SN Software</title>
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Piwik -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.sebastian-navarrete.com/snsoftware"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.sebastian-navarrete.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
  function callbackCaptcha() {
      $("#formContactSubmit").prop('disabled', false);
  }
</script>
<noscript><p><img src="//analytics.sebastian-navarrete.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<noscript><p><img src="//analytics.sebastian-navarrete.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72659243-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- End Piwik Code -->

</head>

@yield('content')

<!-- Footer Section -->
<footer class="footer-wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="copyright text-center">
                <p>&copy; SN Software 2016.</p>
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
</body>
</html>