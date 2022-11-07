<?php
    session_start();
    if (!isset($_GET['cod'])){
        header('Location: error404.php');
    }
    if (!is_numeric($_GET['cod'])) {
        header('Location: error404.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Producto</title>
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
            checksizes();
            checkAcceptCookies();
            var title = $("#sneakerName").val();
            document.title = title;
            // Evento de llamada a la función publish
            $("#publish").click(function() {
                var rating = $("input:radio[name=rating]:checked").val();
                var info = $("#reviewinfo").val();
                var usname = $("#rname").val();
                var fail = 0;
                // Comprobación de parámetros por expresiones regulares
                if (usname == "") {
                    fail++;
                    $("#rname").css("border-color", "red");
                } else {
                    $("#rname").css("border-color", "green");
                }

                if (info == "") {
                    fail++;
                    $("#reviewinfo").css("border-color", "red");
                } else {
                    $("#reviewinfo").css("border-color", "green");
                }
                if (!rating) {
                    fail++;
                    $("#mark").css("color", "red");
                } else {
                    $("#mark").css("color", "green");
                }

                if (fail == 0) {
                    publish();
                }
            })
        });

    </script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper single-product-page">
        <header>
            <?php
            include("header.php");
            ?>
        </header>
        <?php
                $cod=$_GET['cod'];
                $con=conexion("salzaps");
                $accion="select * from sneakers where idSneaker = $cod";
                $result=mysqli_query($con,$accion);
        
                if($datos=mysqli_fetch_array($result)){
                    // Mandamos las primeras 5 zapatillas
                    echo'<!-- breadcrumb-area start -->
                        <div class="breadcrumb-area bg-gray">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="breadcrumb-list">
                                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                            <li class="breadcrumb-item active">'.$datos["name"].'</li>
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
                                    <div class="col">
                                        <div class="row single-product-area">
                                            <div class="col-xl-4  col-lg-6 offset-xl-1 col-md-5 col-sm-12">
                                                <div class="single-product-tab">
                                                    <div class="zoomWrapper">
                                                        <div id="img-1" class="zoomWrapper single-zoom">
                                                            <a href="#">
                                                                <img id="zoom1" src="img/product/'.$datos["name"].'.jpg" data-zoom-image="img/product/'.$datos["name"].'.jpg" alt="'.$datos["name"].'">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-6 col-md-7 col-sm-12">
                                                <!-- product-thumbnail-content start -->
                                                <div class="quick-view-content">
                                                    <div class="product-info">
                                                        <h2>'.$datos["name"].'</h2>
                                                        <div class="price-box">
                                                            <span class="new-price">'.$datos["price"].'€</span>
                                                        </div>
  
                                                        <div class="modal-size">
                                                            <h4>Talla</h4>
                                                            <select id="sizes">
                                                            </select>
                                                        </div>
                                                        <div class="quick-add-to-cart">
                                                            <form class="modal-cart" method="post" action="php/addCart.php">
                                                                <div class="quantity">
                                                                    <label>Cantidad</label>
                                                                    <div class="cart-plus-minus">
                                                                        <input class="cart-plus-minus-box" name="qty" type="number" value="1" min="1">
                                                                    </div>
                                                                    <input type="number" name="cod" hidden value="'.$datos["idSneaker"].'">
                                                                </div>
                                                                <button class="add-to-cart" type="submit">Añadir al carrito</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <!-- product-thumbnail-content end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info-review">
                                    <div class="row">
                                        <div class="col">
                                            <div class="product-info-detailed">
                                                <div class="discription-tab-menu">
                                                    <ul role="tablist" class="nav">
                                                        <li class="active"><a href="#description" data-toggle="tab" class="active show">Descripción</a></li>
                                                        <li><a href="#review" data-toggle="tab">Reseñas</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="discription-content">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active show" id="description">
                                                        <div class="description-content">
                                                            <p>'.utf8_encode($datos["description"]).'</p>
                                                        </div>
                                                    </div>
                                                    <div id="review" class="tab-pane fade">
                                                        <form class="form-review">';
                                                        $accion2="select * from reviews where idSneaker = $cod";
                                                        $result2=mysqli_query($con,$accion2);
                                                        while($datos2=mysqli_fetch_array($result2))
                                                        {
                                                            echo '<div class="review">
                                                                <table class="table table-striped table-responsive">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="table-name"><strong>'.$datos2["rName"].'</strong></td>
                                                                            <td class="text-right">'.$datos2["review_Date"].'</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <p>'.$datos2["review"].'</p>
                                                                                <ul>';
                                                                                for($i=1;$i<=$datos2["rating"];$i++){
                                                                                    echo'<li><i class="fa fa-star"></i></li>';
                                                                                }
                                                                                for($i=1;$i<=(5-$datos2["rating"]);$i++){
                                                                                    echo'<li><i class="fa fa-star-o"></i></li>';
                                                                                }
                                                            echo'               </ul>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>';
                                                        }
                                                            echo '<div class="review-wrap">
                                                                <h2>Escribe una reseña</h2>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="control-label">Nombre</label>
                                                                        <input type="text" class="form-control" id="rname">
                                                                        <input type="number" id="sneaker" hidden value="'.$datos["idSneaker"].'">
                                                                        <input type="text" id="sneakerName" hidden value="'.$datos["name"].'">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="control-label">Reseña</label>
                                                                        <textarea class="form-control" id="reviewinfo"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="control-label" id="mark">Nota</label>
                                                                        &nbsp;&nbsp;&nbsp; Malo&nbsp;
                                                                        <input type="radio" value="1" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="2" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="3" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="4" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="5" name="rating">
                                                                        &nbsp;Bueno
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="buttons clearfix">
                                                                <div class="pull-right">';
                                                                    if (isset($_SESSION['user'])){
                                                                    echo '<button class="button-review" type="button" id="publish">Continuar</button>';
                                                                    }else{
                                                                    echo '<button class="button-review"><a class="view" href="login-register.php">Iniciar Sesión</a></button>';
                                                                    }
                                                                                
                                                                echo '</div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wraper end -->';
            ?>

        <!-- product-area start -->
        <div class="product-area pt-95">
            <div class="container-fluid">
                <div class="tab-content">
                    <div id="new-arrivals" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="col">
                                <div class="section-title-3">
                                    <h2>Productos relacionados:</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <?php
                    $accion3='select * from sneakers where brand="'.$datos["brand"].'"';
                    $result3=mysqli_query($con,$accion3);
                    while($datos3=mysqli_fetch_array($result3))
                    {
                        echo '<div class="col">
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="single-product.php?cod='.$datos3["idSneaker"].'">
                                <img class="primary-image" src="img/product/'.$datos3["name"].'.jpg" alt="'.$datos["name"].'">
                            </a>
                        </div>
                        <div class="product_desc">
                            <div class="product_desc_info">
                                <h4><a class="product_name" href="single-product.php?cod='.$datos3["idSneaker"].'">'.$datos3["name"].'</a></h4>
                                <div class="manufacturer"><a href="single-product.php?cod='.$datos3["idSneaker"].'">'.$datos3["brand"].'</a></div>
                                <div class="price-box">
                                    <span class="new-price">'.$datos3["price"].'€</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart"><a href="#" onclick="addwish('.$datos3["idSneaker"].')"><i class="ion-heart"></i> Añadir a la lista de deseos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                }else{
                    echo '<div class="content-wraper mt-95">
                        <div class="container-fluid">
                            <p>No se ha encontrado ese producto. Por favor si el fallo persiste, póngase en contacto con nuestro soporte técnico.</p>
                        </div>
                    </div>';
                }
                mysqli_close($con);
                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area end -->

        <!-- space-area start -->
        <div class="ptb-95">
        </div>
        <!-- space-area end -->

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
