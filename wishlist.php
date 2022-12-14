<?php
    session_start();
    if (!isset($_SESSION['user'])){
        header('Location: login-register.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lista de deseos</title>
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

    <div class="wrapper wishlist-page">
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
                            <li class="breadcrumb-item active">Lista de deseos</li>
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
                    <div class="col-12">
                        <form action="#">
                            <div class=" table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="plantmore-product-remove">Eliminar</th>
                                            <th class="plantmore-product-thumbnail">Imagen</th>
                                            <th class="cart-product-name">Producto</th>
                                            <th class="plantmore-product-price">Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $con=conexion("salzaps");
                                            $accion='select * from wishlist natural join sneakers where idUser = '.$_SESSION['idUser'].';';
                                            $result=mysqli_query($con,$accion);
                                            while($datos=mysqli_fetch_array($result))
                                            {
                                            echo'<tr>
                                            <td class="plantmore-product-remove"><a href="#" onclick="remwish('.$datos["idSneaker"].')"><i class="fa fa-times"></i></a></td>
                                            <td class="plantmore-product-thumbnail"><a href="single-product.php?cod='.$datos["idSneaker"].'"><img alt="'.$datos["name"].'" src="img/product/'.$datos["name"].'.jpg" height="100px" width="100px"></a></td>
                                            <td class="plantmore-product-name"><a href="single-product.php?cod='.$datos["idSneaker"].'">'.$datos["name"].'</a></td>
                                            <td class="plantmore-product-price"><span class="amount">'.$datos["price"].'???</span></td>
                                            </tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
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
