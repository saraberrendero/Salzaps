<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Salzaps | Tienda de calzado deportivo</title>
    <meta name="description" content="Descubre las zapatillas exclusivas de las primeras marcas deportivas en Salzaps. NIKE ADIDAS CONVERSE VANS">
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
    <style>
        ba. {
            background-size: contain;
            background-repeat: no-repeat
        }

    </style>
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

    <div class="wrapper">
        <header>
            <?php
            include("header.php");
            ?>
        </header>

        <!-- slider-main-area start -->
        <div class="slider-main-area">
            <div class="slider-active owl-carousel">
                <!-- slider-wrapper start -->
                <div class="slider-wrapper" style="background-image:url(img/slider/Vans-OldSkool-AsapRocky_1024x1024.jpg);background-size: cover">
                    <div class="container-fluid">
                        <div class="row justify-content-end">
                            <div class="col-lg-11 col-md-11">
                                <div class="slider-text-info style-1 slider-text-animation">
                                    <h4 class="title1 text-white">Novedades</h4>
                                    <h1 class="title2 text-white"><span>Nuevos</span> modelos</h1>
                                    <div class="slier-btn-1">
                                        <a title="shop now" href="shop.php?cat=novedad" class="shop-btn text-white">Comprar ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-wrapper end -->
                <!-- slider-wrapper start -->
                <div class="slider-wrapper" style="background-image:url(img/slider/GettyImages-85219041.jpg);background-size: cover">
                    <div class="container-fluid">
                        <div class="row justify-content-end">
                            <div class="col-lg-11 col-md-11">
                                <div class="slider-text-info style-1 slider-text-animation">
                                    <h4 class="title1 text-white">Ofertas</h4>
                                    <h1 class="title2 text-white"><span>Nuevas </span> ofertas</h1>
                                    <p class="text-white">Todo tipo de marcas</p>
                                    <div class="slier-btn-1">
                                        <a title="shop now" href="shop.php?cat=oferta" class="shop-btn text-white">Comprar ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-wrapper end -->
                <!-- slider-wrapper start -->
                <div class="slider-wrapper" style="background-image:url(img/slider/sneaker-fever-horizontal.jpg);background-size: cover">
                    <div class="container-fluid">
                        <div class="row justify-content-end">
                            <div class="col-lg-11 col-md-11">
                                <div class="slider-text-info style-1 slider-text-animation">
                                    <h1 class="title2 text-white"><span>Nike</span> Black</h1>
                                    <p class="text-white">Collection</p>
                                    <div class="slier-btn-1">
                                        <a title="shop now" href="shop.php?search=nike" class="shop-btn text-white">Comprar ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-wrapper end -->
            </div>
        </div>
        <!-- slider-main-area end -->

        <!-- product-area start -->
        <div class="product-area pt-95">
            <div class="container-fluid">
                <div class="tab-content">
                    <div id="new-arrivals" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="col">
                                <div class="section-title-3">
                                    <h2>Productos:</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <?php
                                    $con=conexion("salzaps");
                                    $accion="select * from sneakers order by RAND() limit 0,9";
                                    $result=mysqli_query($con,$accion);
                                    while($datos=mysqli_fetch_array($result))
                                    {
                                        // Mandamos las primeras 5 zapatillas
                                        echo '<div class="col">
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.php?cod='.$datos["idSneaker"].'">
                                                            <img class="primary-image" src="img/product/'.$datos["name"].'.jpg" alt="'.$datos["name"].'">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                        <h4><a class="product_name" href="single-product.php?cod='.$datos["idSneaker"].'">'.$datos["name"].'</a></h4>
                                                        <div class="manufacturer"><a href="single-product.php?cod='.$datos["idSneaker"].'">'.$datos["brand"].'</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">'.$datos["price"].'€</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#" onclick="addwish('.$datos["idSneaker"].')"><i class="ion-heart"></i> Añadir a la lista de deseos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                 </div>
                                                </div>';
                                    }
                                    mysqli_close($con);
                                ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div id="new-arrivals" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="col">
                                <div class="section-title-3">
                                    <h2>Ofertas:</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <?php
                                    $con2=conexion("salzaps");
                                    $accion2="select * from sneakers WHERE category = 'oferta'";
                                    $result2=mysqli_query($con2,$accion2);
                                    while($datos2=mysqli_fetch_array($result2))
                                    {
                                        echo '<div class="col">
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.php?cod='.$datos2["idSneaker"].'">
                                                            <img class="primary-image" src="img/product/'.$datos2["name"].'.jpg" alt="'.$datos2["name"].'">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                        <h4><a class="product_name" href="single-product.php?cod='.$datos2["idSneaker"].'">'.$datos2["name"].'</a></h4>
                                                        <div class="manufacturer"><a href="single-product.php?cod='.$datos2["idSneaker"].'">'.$datos2["brand"].'</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">'.$datos2["price"].'€</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#" onclick="addwish('.$datos2["idSneaker"].')"><i class="ion-heart"></i> Añadir a la lista de deseos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                 </div>
                                                </div>';
                                    }
                                    mysqli_close($con2);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area end -->

    <!-- banner-area start -->
    <div class="banner-area ptb-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-banner-box-2">
                        <a href="https://www.instagram.com/scrapworldes/?hl=es" target="_blank"><img src="img/banner/channels4_banner.jpg" alt="banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area end -->

    <!-- footer-area start -->
    <footer class="footer-area">
        <?php
            include("footer.php");
        ?>
    </footer>
    <!-- footer-area start -->

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
