<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout</title>
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

    <div class="wrapper checkout-page">
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
                            <li class="breadcrumb-item active">Checkout</li>
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
                    <!-- checkout-area start -->
                    <div class="checkout-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 offset-xl-1 col-xl-5 col-sm-12">
                                        <form action="#">
                                            <div class="checkbox-form">
                                                <h3 class="shoping-checkboxt-title">Detalles de la factura</h3>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="single-form-row">
                                                            <label>Nombre <span class="required">*</span></label>
                                                            <input type="text" name="First name">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p class="single-form-row">
                                                            <label>Email <span class="required">*</span></label>
                                                            <input type="text" name="Last name ">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="single-form-row">
                                                            <label>Nombre de la compañía</label>
                                                            <input type="text" name="email">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="single-form-row">
                                                            <label>Pais <span class="required">*</span></label>
                                                            <div class="nice-select wide">
                                                                <select>
                                                                    <option>Seleccione un país...</option>
                                                                    <option>Albania</option>
                                                                    <option>Angola</option>
                                                                    <option>Argentina</option>
                                                                    <option>Austria</option>
                                                                    <option>Azerbaijan</option>
                                                                    <option>España</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="single-form-row">
                                                            <label>Dirección <span class="required">*</span></label>
                                                            <input type="text" name="address" placeholder="c/Princesa...">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="single-form-row">
                                                            <label>Municipio <span class="required">*</span></label>
                                                            <input type="text" name="address">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="single-form-row">
                                                            <label>Provincia</label>
                                                            <input type="text" name="address">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="single-form-row">
                                                            <label>Código Postal <span class="required">*</span></label>
                                                            <input type="text" name="address">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="single-form-row">
                                                            <label>Móvil</label>
                                                            <input type="text" name="address">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="single-form-row">
                                                            <label id="chekout-box-2"><input type="checkbox"> ¿Enviar a otra dirección?</label>
                                                            <div class="ship-box-info">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <p class="single-form-row">
                                                                            <label>Nombre <span class="required">*</span></label>
                                                                            <input type="text" name="First name">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <p class="single-form-row">
                                                                            <label>Email <span class="required">*</span></label>
                                                                            <input type="text" name="Last name ">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <p class="single-form-row">
                                                                            <label>Nombre de la compañía</label>
                                                                            <input type="text" name="email">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="single-form-row">
                                                                            <label>Pais <span class="required">*</span></label>
                                                                            <div class="nice-select wide">
                                                                                <select>
                                                                                    <option>Seleccione un país...</option>
                                                                                    <option>Albania</option>
                                                                                    <option>Angola</option>
                                                                                    <option>Argentina</option>
                                                                                    <option>Austria</option>
                                                                                    <option>Azerbaijan</option>
                                                                                    <option>España</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <p class="single-form-row">
                                                                            <label>Dirección <span class="required">*</span></label>
                                                                            <input type="text" name="address" placeholder="c/Princesa...">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <p class="single-form-row">
                                                                            <label>Municipio <span class="required">*</span></label>
                                                                            <input type="text" name="address">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <p class="single-form-row">
                                                                            <label>Provincia</label>
                                                                            <input type="text" name="address">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <p class="single-form-row">
                                                                            <label>Código Postal <span class="required">*</span></label>
                                                                            <input type="text" name="address">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <p class="single-form-row">
                                                                            <label>Móvil</label>
                                                                            <input type="text" name="address">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p class="single-form-row m-0">
                                                            <label>Comentario</label>
                                                            <textarea cols="5" rows="2" class="checkout-mess" placeholder="Comentarios sobre su pedido."></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6  col-xl-5 col-sm-12">
                                        <div class="checkout-review-order">
                                            <form action="purchase-succes.php">
                                                <h3 class="shoping-checkboxt-title">Pagos</h3>
                                                <div class="checkout-payment">
                                                    <div class="payment_methods">
                                                        <p><label>PayPal Express Checkout <a href="#"><img src="img/icon/pp-acceptance-small.png" alt=""></a></label></p>
                                                        <p>Tarjeta; puedes pagar con tu tarjeta de credito si no tiene Paypal.</p>
                                                    </div>
                                                    <button class="button-continue-payment" type="submit">Pagar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- checkout-area end -->
                </div>
            </div>
            <!-- content-wraper end -->

            <!-- footer-area start -->
            <footer class="footer-area mt-95">
                <?php
            include("footer.php");
        ?>
            </footer>
            <!-- footer-area start -->
        </div>
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
