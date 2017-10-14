<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Registro Completado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<!-- header section -->
<section class="banner" role="banner">
    <header id="header">
        <!-- navigation section  -->
        <div class="header-content clearfix"> <a class="logo" href="/"><img src="images/velocimetro.jpg" alt="Mafolio" width="100px" height="100px"></a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="registrarse">Registrarse</a></li>
                    <li><a href="/#quienes_somos">Quienes somos</a></li>
                    <li><a href="http://www.zubirimanteo.hezkuntza.net/web/guest/inicio">Web de Zubiri Manteo</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
        <!-- navigation section  -->
    </header>
    <!-- banner text -->
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="banner-text text-center">
                <h1>Registrado</h1>
                <!-- banner text -->
            </div>
        </div>
    </div>
</section>
<!-- header section -->
<center><h1>Gracias por registrarse</h1></center><br />
<div id="introduccion">
    <h3>¡Gracias por registrarse! Un correo electrónico de confirmación ha sido enviado a {{ $_REQUEST['Email'] }}.
        Por favor, comprueba tu bandeja de correo.</h3> <br />
</div>
<!-- footer -->
<footer class="section footer">
    <center><h3><b>Contactos de redes sociales</b></h3></center>
    <br />
    <a href="https://www.facebook.com/">
        <img src="images/facebook_like.png" width="50px" height="50px" title="Facebook">
    </a>
    <a href="https://twitter.com/?lang=en">
        <img src="images/twitter_tuit.png" width="50px" height="50px" title="Twitter">
    </a>
    <a href="https://www.youtube.com/">
        <img src="images/youtube_channel.png" width="50px" height="50px" title="Youtube">
    </a>
    <a href="https://www.instagram.com/?hl=en">
        <img src="images/instagram_profile.png" width="50px" height="50px" title="Instagram">
    </a>
</footer>
<!-- footer -->
</body>
</html>