<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contacto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- all CSS hear -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/mainmenu.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="js/cookies.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script>
        $(document).ready(function() {
            checkAcceptCookies();
        });

    </script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper contact-page">
        <header>
            <?php
            include("header.php");
            ?>
        </header>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area bg-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Contacto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- content-wraper start -->
        <div class="content-wraper">
            <div class="container-fluid  p-0">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <div class="contact-form-inner">
                            <h2>Cuéntanos tu Propuesta</h2>
                            <form id="contact-form" method="POST" action="php/email.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <input type="text" placeholder="Nombre*" name="name">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <input type="text" placeholder="Apellido*" name="lastname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <input type="email" placeholder="Correo Electrónico*" name="email">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <input type="text" placeholder="Tema*" name="subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <textarea placeholder="Mensaje*" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="contact-submit-btn">
                                    <button class="submit-btn" type="submit">Enviar Correo Electronico</button>
                                    <p class="form-messege"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 plr-0">
                        <div class="contact-address-area">
                            <h2>CONTÁCTENOS</h2>
                            <p>Cualquier problema o duda que le surja contacte con nosotros por mail o por nuestras RRSS.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-phone">&nbsp;</i> +34 911 222 333
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>&nbsp; CREARMAIL@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper end -->

        <!-- footer-area start -->
        <footer class="footer-area">
            <?php
            include("footer.php");
        ?>
        </footer>
        <!-- footer-area start -->
    </div>


    <!-- jquery -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- all plugins JS hear -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mainmenu.js"></script>
    <script src="js/ajax-email.js"></script>
    <script src="js/plugins.js"></script>

    <!-- main JS -->
    <script src="js/main.js"></script>
</body>

</html>
