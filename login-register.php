<?php
    session_start();
    if (isset($_SESSION['user'])){
        header('Location: index.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inicio de sesion y Registro</title>
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
    <script type="text/javascript">
        $(document).ready(function() {
            checkAcceptCookies();

            // Evento de llamada a la función registo
            $("#register").click(function() {
                var mail = $("#email").val();
                var pass = $("#password").val();
                var usname = $("#username").val();
                var fail = 0;
                // Comprobación de parámetros por expresiones regulares
                if (usname == "") {
                    fail++;
                    $("#wrongruser").show("fast");
                    $("#wrongruser").html("El campo no puede estar vacío");
                    $("#username").css("border-color", "red");
                } else {
                    $("#wrongruser").hide("fast");
                    $("#username").css("border-color", "green");
                }

                if (!pass.match(/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/)) {
                    fail++;
                    $("#wrongrpass").show("fast");
                    $("#wrongrpass").html("La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. NO puede tener otros símbolos.");
                    $("#password").css("border-color", "red");
                } else {
                    $("#wrongrpass").hide("fast");
                    $("#password").css("border-color", "green");
                }

                if (!mail.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/)) {
                    fail++;
                    $("#wrongrmail").show("fast");
                    $("#wrongrmail").html("El email debe estar bien compuesto");
                    $("#email").css("border-color", "red");
                } else {
                    $("#wrongrmail").hide("fast");
                    $("#email").css("border-color", "green");
                }

                if (fail == 0) {
                    register();
                }
            })
            $("#login").click(function() {
                login();
            })
            $("#lost-pass").click(function() {
                $("#newpassword").html('<div class="login-Register-info" id="newpassword"><form action="#"><p class="coupon-input form-row-first"><label>Email <span class="required">*</span></label><input type="text" name="emailnewpass" id="logmailnewpass"></p><p><input type="button" value="Recuperar contraseña" id="newpass" name="newpass" class="button-login"></p></form></div>');
            })
        });

    </script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
    <!-- Add your application content here -->
    <div class="wrapper login-register-page">
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
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Inicio de sesión y Registro</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- content-wraper start -->
        <div class="content-wraper mt-95">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="customer-login-register">
                            <h3>Inicio de sesión</h3>
                            <div class="login-Register-info">
                                <form action="#">
                                    <p class="coupon-input form-row-first">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="text" name="email" id="logmail">
                                    </p>
                                    <p class="coupon-input form-row-last">
                                        <label>Contraseña <span class="required">*</span></label>
                                        <input type="password" name="password" id="logpass">
                                    </p>
                                    <p class="wronglogin text-danger" id="wronglogin"></p>
                                    <div class="clear"></div>
                                    <p>
                                        <input type="button" value="Iniciar sesión" id="login" name="login" class="button-login">
                                        <span href="#" class="lost-password" id="lost-pass">¿Has perdido tu contraseña?</span>
                                    </p>
                                </form>
                            </div>
                            <div id="newpassword"></div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <div class="customer-login-register">
                            <h3>Registro</h3>
                            <div class="login-Register-info">
                                <form action="#">
                                    <p class="coupon-input form-row-first">
                                        <label>Nombre de usuario <span class="required">*</span></label>
                                        <input type="text" name="username" id="username">
                                    </p>
                                    <p class="wrongruser text-danger" id="wrongruser"></p>
                                    <p class="coupon-input form-row-first">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="text" name="email" id="email">
                                    </p>
                                    <p class="wrongrmail text-danger" id="wrongrmail"></p>
                                    <p class="coupon-input form-row-last">
                                        <label>Contraseña <span class="required">*</span></label>
                                        <input type="password" name="password" id="password">
                                    </p>
                                    <p class="wrongrpass text-danger" id="wrongrpass"></p>
                                    <div class="clear"></div>
                                    <p>
                                        <input type="button" value="Registrate" id="register" name="register" class="button-login">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper end -->

        <!-- footer-area start -->
        <footer class="footer-area mt-65">
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
