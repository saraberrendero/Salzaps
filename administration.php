<?php
    session_start();
    if (!isset($_SESSION['admin'])){
        header('Location: login-register.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administracion</title>
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
                            <li class="breadcrumb-item active">Administración</li>
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
                    <div class="row">
                        <div class="col-md-12 col-lg-2">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column dashboard-list" role="tablist">
                                <li> <a class="nav-link" data-toggle="tab" href="#orders">Pedidos</a></li>
                                <li><a class="nav-link active" data-toggle="tab" href="#sneakers">Zapatillas</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#user">Usuarios</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-10">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content">
                                <div id="orders" class="tab-pane fade show">
                                    <h3>Pedidos</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Cod. Pedido</th>
                                                    <th>Cod. Usuario</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $con=conexion("salzaps");
                                                $accion='select * from orders;';
                                                $result=mysqli_query($con,$accion);
                                                while($datos=mysqli_fetch_array($result))
                                                {
                                                    echo'<tr>
                                                    <td>'.$datos["IdOrder"].'</td>
                                                    <td>'.$datos["idUser"].'</td>
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
                                <div id="sneakers" class="tab-pane active">
                                    <h3>Zapatillas</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Marca</th>
                                                    <th>Género</th>
                                                    <th>Categoría</th>
                                                    <th>Precio</th>
                                                    <th>Modificar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $accion2='select * from sneakers';
                                                $cont=0;
                                                $result2=mysqli_query($con,$accion2);
                                                while($datos2=mysqli_fetch_array($result2))
                                                {
                                                    $cont++;
                                                    echo' <form action="php/modify-product.php" method="post" id="'.$cont.'">
                                                    <input type="number" name="cod" value="'.$datos2["idSneaker"].'" hidden>
                                                    <tr>
                                                    <td><input type="text" name="name" value="'.$datos2["name"].'"></td>
                                                    <td><input type="text" name="brand" value="'.$datos2["brand"].'"></td>
                                                    <td>
                                                        <select name="genre">
                                                        <option selected value="'.$datos2["genre"].'"> '.$datos2["genre"].' </option>
                                                        <optgroup label="Géneros"> 
                                                           <option value="Unisex">Unisex</option>
                                                           <option value="Hombre">Hombre</option> 
                                                           <option value="Mujer">Mujer</option>
                                                        </optgroup>    
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="cat">
                                                        <option selected value="'.$datos2["category"].'"> '.$datos2["category"].' </option>
                                                        <optgroup label="Categorías"> 
                                                           <option value=""></option>
                                                           <option value="Novedad">Novedad</option> 
                                                           <option value="Oferta">Oferta</option>
                                                        </optgroup>    
                                                        </select>
                                                    </td>
                                                    <td><input type="number" name="price" value="'.$datos2["price"].'"></td>
                                                    <td><input class="view" type="submit" form="'.$cont.'" value="Modificar"></td>
                                                 </tr></form>';                                                    
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="user" class="tab-pane">
                                    <h3>Usuarios</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Borrar</th>
                                                    <th>Código</th>
                                                    <th>Nombre</th>
                                                    <th>Correo</th>
                                                    <th>Acciones</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $accion3='select * from users';
                                                $result3=mysqli_query($con,$accion3);
                                                while($datos3=mysqli_fetch_array($result3))
                                                {
                                                    if ($datos3["admin_"]==1){
                                                        echo'<tr>
                                                        <td>Administrador</td>';
                                                    }else{
                                                        echo'<tr>
                                                        <td><a class="view" href="php/delete-user.php?cod='.$datos3["idUser"].'">Borrar</a></td>';
                                                    }
                                                    echo'
                                                    <td>'.$datos3["idUser"].'</td>
                                                    <td>'.$datos3["userName"].'</td>
                                                    <td>'.$datos3["mail"].'</td>';
                                                    if ($datos3["admin_"]==1){
                                                        echo'
                                                        <td>Administrador</td>';
                                                    }else{
                                                        echo'<td><a class="view" href="php/make-admin.php?cod='.$datos3["idUser"].'">Hacer Admin</a></td>
                                                        </tr>';
                                                    }
                                                }
                                            ?>
                                            </tbody>
                                        </table>
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
