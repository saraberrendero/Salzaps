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
    <title>Mi Cuenta</title>
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

            $("#newCardOpen").click(function() {
                $("#newCard").show("slow");
            })

        });

    </script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper my-account-page">
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
                            <li class="breadcrumb-item active">Mi Cuenta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- content-wraper start -->
        <div class="content-wraper mt-95">
            <div class="container-fluid">
                <div class="account-dashboard mtb-60">
                    <div class="dashboard-upper-info">
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-3 col-md-12">
                                <div class="d-single-info">
                                    <p class="user-name">Hola <span><?php echo $_SESSION['user']?></span></p>
                                    <p>(¿No eres tú? <a href="php/sign-out.php">Cerrar sesión</a>)</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="d-single-info">
                                    <p>¿Necesitas asistencia? Servicio al cliente: </p>
                                    <p>+34 911 222 333</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="d-single-info">
                                    <p>Mandanos un correo si necesitas ayuda: </p>
                                    <p>crearmail@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12">
                                <div class="d-single-info text-lg-center">
                                    <a class="view-cart" href="cart.php"><i class="fa fa-cart-plus"></i>Ver el carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-2">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column dashboard-list" role="tablist">
                                <li> <a class="nav-link active" data-toggle="tab" href="#orders">Pedidos</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#cards">Tarjetas</a></li>
                                <li><a class="nav-link" href="wishlist.php">Lista de deseos</a></li>
                                <li><a class="nav-link" href="php/sign-out.php">Cerrar sesión</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-10">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content">
                                <div id="orders" class="tab-pane fade show active">
                                    <h3>Pedidos</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Pedido</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $cont=0;
                                                $con=conexion("salzaps");
                                                $accion='select * from orders where idUser = '.$_SESSION['idUser'].';';
                                                $result=mysqli_query($con,$accion);
                                                while($datos=mysqli_fetch_array($result))
                                                {
                                                    $cont++;
                                                    echo'<tr>
                                                    <td>'.$cont.'</td>
                                                    <td>'.$datos["purchase_Date"].'</td>
                                                    <td>'.$datos["total"].'€</td>
                                                    <td><a class="view" href="order-details.php?odetail='.$datos["IdOrder"].'">Ver</a></td>
                                                    </tr>';
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="cards" class="tab-pane">
                                    <p>Tarjetas guardadas</p>
                                    <button type="button" id="newCardOpen" class="view">Añadir nueva tarjeta</button>
                                    <div class="product-area pt-95">
                                        <div class="container-fluid">
                                            <div class="tab-content">
                                                <div id="new-arrivals" class="tab-pane active show" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col" id="newCard" style="display: none;">
                                                            <form action="php/addCard.php" method="post">
                                                                <span>Tipo: </span>
                                                                <select name="type">
                                                                    <option value="VISA">VISA</option>
                                                                    <option value="MasterCard">MasterCard</option>
                                                                </select>
                                                                <p><span>Número: </span><input type="number" name="number" required></p>
                                                                <p><span>Nombre Titular: </span><input type="text" name="name" required></p>
                                                                <input class="view" type="submit" value="Añadir Nueva">
                                                            </form>
                                                        </div>
                                                        <?php
                                                            $accion2='select * from cards where idUser = '.$_SESSION['idUser'].';';
                                                            $result2=mysqli_query($con,$accion2);
                                                            while($datos2=mysqli_fetch_array($result2))
                                                            {
                                                                echo'
                                                                    <div class="col">
                                                                    <h4 class="billing-address">'.$datos2["type_"].'</h4>
                                                                    <p>'.$datos2["number_"].'</p>
                                                                    <p>'.$datos2["cName"].'</p>
                                                                    <a class="view" href="php/delete-card.php?cod='.$datos2["idCard"].'">Eliminar</a>
                                                                </div>';
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
