<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tienda</title>
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

    <div class="wrapper">
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
                            <li class="breadcrumb-item active">Zapatillas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- content-wraper start -->
        <div class="content-wraper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <!--sidebar-categores-box start  -->
                        <div class="sidebar-categores-box mt-95">
                            <div class="sidebar-title">
                                <h2>Filtrar Por</h2>
                            </div>
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-titel">Marca</h5>
                                <div class="price-checkbox">
                                    <ul>
                                        <li><a href="shop.php?search=nike">Nike</a></li>
                                        <li><a href="shop.php?search=adidas">Adidas</a></li>
                                        <li><a href="shop.php?search=converse">Converse</a></li>
                                        <li><a href="shop.php?search=jordan">Jordan</a></li>
                                        <li><a href="shop.php?search=vans">Vans</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-titel">Precio</h5>
                                <div class="price-checkbox">
                                    <ul>
                                        <li><a href="shop.php?price=0&price2=149">€0 - €150</a></li>
                                        <li><a href="shop.php?price=150&price2=299">€150 - €300</a></li>
                                        <li><a href="shop.php?price=300&price2=499">€300 - €450</a></li>
                                        <li><a href="shop.php?price=450&price2=99999">+€450</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-titel">Talla</h5>
                                <div class="price-checkbox">
                                    <ul>
                                        <li><a href="shop.php?size=36&size2=38">36 - 38</a></li>
                                        <li><a href="shop.php?size=39&size2=41">39 - 41</a></li>
                                        <li><a href="shop.php?size=42&size2=44">42 - 44</a></li>
                                        <li><a href="shop.php?size=45&size2=48">45 - 48</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
                        </div>
                        <!--sidebar-categores-box end  -->
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- shop-top-bar start -->
                        <div class="shop-top-bar mt-95">
                            <span>Tipo de vista</span>
                            <div class="shop-bar-inner">
                                <div class="product-view-mode">
                                    <!-- shop-item-filter-list start -->
                                    <ul class="nav shop-item-filter-list" role="tablist">
                                        <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                    <!-- shop-item-filter-list end -->
                                </div>
                            </div>
                        </div>
                        <!-- shop-top-bar end -->
                        <!-- shop-products-wrapper start -->
                        <div class="shop-products-wrapper">
                            <div class="tab-content">
                                <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                    <div class="shop-product-area">
                                        <div class="row">
                                            <?php
                                            if(isset($_GET['search'])){
                                                $accion="select * from sneakers WHERE name LIKE '%".$_GET['search']."%'";
                                            }
                                            elseif(isset($_GET['price']) && isset($_GET['price2'])){
                                                $accion="select * from sneakers WHERE price BETWEEN ".$_GET['price']." and ".$_GET['price2']."";
                                            }
                                            elseif(isset($_GET['size']) && isset($_GET['size2'])){
                                                $accion="select DISTINCT idSneaker, sneakers.* from sneakers NATURAL JOIN storage_ WHERE size_ BETWEEN ".$_GET['size']." and  ".$_GET['size2']." AND stock > 0";
                                            }
                                            elseif(isset($_GET['cat'])){
                                                $accion="select * from sneakers WHERE category = '".$_GET['cat']."'";
                                            }
                                            else{
                                                $accion="select * from sneakers";
                                            }
                                            $cont=0;
                                            $con=conexion("salzaps");
                                            $result=mysqli_query($con,$accion);
                                            while($datos=mysqli_fetch_array($result))
                                            {
                                                echo '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-40">
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
                                                 $cont++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="list-view" class="tab-pane fade" role="tabpanel">
                                    <div class="row">
                                        <div class="col">
                                            <?php
                                            $result2=mysqli_query($con,$accion);
                                            while($datos2=mysqli_fetch_array($result2))
                                            {
                                                echo '<div class="row product-layout-list">
                                                <div class="col-lg-4 col-md-5 ">
                                                    <div class="product-image">
                                                        <a href="single-product.php?cod='.$datos2["idSneaker"].'">
                                                            <img alt="'.$datos2["name"].'" src="img/product/'.$datos2["name"].'.jpg" class="primary-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-7">
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <h4><a href="single-product.php?cod='.$datos2["idSneaker"].'" class="product_name">'.$datos2["name"].'</a></h4>
                                                            <div class="manufacturer"><a href="single-product.php?cod='.$datos2["idSneaker"].'">'.$datos2["brand"].'</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">'.$datos2["price"].'€</span>
                                                            </div>
                                                            <p>'.$datos2["description"].'</p>
                                                            <div class="list-add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart"><a href="#" onclick="addwish('.$datos2["idSneaker"].')"><i class="ion-heart"></i> Añadir a la lista de deseos</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>
                                    <p>Se han encontrado <?php echo $cont ?> zapatillas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
        </div>
        <?php mysqli_close($con);  ?>

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
