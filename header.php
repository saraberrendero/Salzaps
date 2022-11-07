<!-- header-top start -->
<div class="header-top bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-4">
            </div>
            <div class="col-lg-6 col-md-8">
                <!-- full-setting-area start -->
                <div class="full-setting-area">
                    <div class="top-dropdown">
                        <ul>
                            <?php
                                if (isset($_SESSION['admin'])){
                                    echo '<a href="administration.php" class="text-white">Administración &nbsp &nbsp &nbsp &nbsp &nbsp</a>';
                                }
                                if (isset($_SESSION['user'])){
                                    echo 
                                            '<span class="text-light">'.$_SESSION['user'].'</span>
                                                <li class="drodown-show"><a href="#"> Configuración <i class="fa fa-angle-down"></i></a>
                                                    <ul class="open-dropdown setting">
                                                        <li><a href="my-account.php">Mi cuenta</a></li>
                                                        <li><a href="wishlist.php">Lista de deseos</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="php/sign-out.php">Cerrar sesión</a></li>
                                                    </ul>
                                                </li>';
                                }else{
                                    echo '<a href="login-register.php" class="text-white">Iniciar sesión</a>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- full-setting-area end -->
            </div>
        </div>
    </div>
</div>
<!-- header-top end -->

<!-- header-mid-area start -->
<div class="header-mid-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col md-custom-12">
                <!-- logo start -->
                <div class="logo">
                    <a href="index.php"><img src="img/logo/Logo_5.png" alt="logo" width="85%"></a>
                </div>
                <!-- logo end -->
            </div>
            <div class="col-lg-9 md-custom-12">
                <!-- shopping-cart-box start -->
                <div class="shopping-cart-box">
                    <ul>
                        <li>
                            <a href="cart.php">
                                <span class="item-cart-inner">
                                    <span class="item-cont" id="totalitems">0</span>
                                </span>
                            </a>
                            <ul class="shopping-cart-wrapper">
                                <?php
                                    require("php/bdconexion.php");
                                    if (isset($_SESSION['user'])){
                                                $con5=conexion("salzaps");
                                                $accion5='select * from cart natural join sneakers where idUser = '.$_SESSION['idUser'].';';
                                                $result5=mysqli_query($con5,$accion5);
                                                $cont=0;
                                                while($datos5=mysqli_fetch_array($result5))
                                                {
                                                  echo '<li>
                                                        <div class="shoping-cart-image">
                                                            <a href="single-product.php?cod='.$datos5["idSneaker"].'">
                                                                <img src="img/product/'.$datos5["name"].'.jpg" width="67%" height="70%" alt="'.$datos5["name"].'">
                                                                <span class="product-quantity">'.$datos5["quantity"].'x</span>
                                                            </a>
                                                        </div>
                                                        <div class="shoping-product-details">
                                                            <h3><a href="single-product.php?cod='.$datos5["idSneaker"].'">'.$datos5["name"].'</a></h3>
                                                            <div class="price-box">
                                                                <span>'.$datos5["price"].'€</span>
                                                            </div>
                                                        </div>
                                                    </li>';
                                                    $cont++;
                                                }
                                        echo '<input type="number" value='.$cont.' hidden id="totalofproducts">';
                                        mysqli_close($con5);
                                    }
                                else{
                                    echo '<p>El carrito está vacío</p>';
                                }
                                        ?>
                                <li class="shoping-cart-btn">
                                    <a class="checkout-btn" href="cart.php">Ver carrito</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- shopping-cart-box end -->

                <!-- searchbox start -->
                <div class="searchbox">
                    <form action="shop.php" method="get">
                        <div class="search-form-input">
                            <input type="text" placeholder="Buscar en Salzaps ... " name="search">
                            <button class="top-search-btn" type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
                <!-- searchbox end -->
            </div>
        </div>
    </div>
</div>
<!-- header-mid-area end -->

<!-- header-bottom-area start -->
<div class="header-bottom-area bg-black sticky-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 d-none d-lg-block">
                <!-- main-menu-area start -->
                <div class="main-menu-area">
                    <nav>
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="">Zapatillas<i class="ion-ios-arrow-down"></i></a>
                                <ul class="mega-menu mega-menu-2">
                                    <li><a href="#">Marca</a>
                                        <ul>
                                            <li><a href="shop.php?search=nike">Nike</a></li>
                                            <li><a href="shop.php?search=adidas">Adidas</a></li>
                                            <li><a href="shop.php?search=converse">Converse</a></li>
                                            <li><a href="shop.php?search=jordan">Jordan</a></li>
                                            <li><a href="shop.php?search=vans">Vans</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tallas</a>
                                        <ul>
                                            <li><a href="shop.php?size=36&size2=38">36 - 38</a></li>
                                            <li><a href="shop.php?size=39&size2=41">39 - 41</a></li>
                                            <li><a href="shop.php?size=42&size2=44">42 - 44</a></li>
                                            <li><a href="shop.php?size=45&size2=48">45 - 48</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Precio</a>
                                        <ul>
                                            <li><a href="shop.php?price=0&price2=149">€0 - €150</a></li>
                                            <li><a href="shop.php?price=150&price2=299">€150 - €300</a></li>
                                            <li><a href="shop.php?price=300&price2=499">€300 - €450</a></li>
                                            <li><a href="shop.php?price=450&price2=99999">+€450</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.php?cat=novedad">Novedades</a></li>
                            <li><a href="shop.php?cat=oferta">Ofertas</a></li>
                            <li><a href="contact.php">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- main-menu-area end -->
            </div>
            <div class="col-lg-4">
                <!-- social-follow-box start -->
                <div class="social-follow-box">
                    <div class="follow-title">
                        <h2>Siguenos:</h2>
                    </div>
                    <ul class="social-follow-list">
                        <li><a href="https://twitter.com/salzaps" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/salzaps/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- social-follow-box end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-block d-lg-none">
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul>
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="#">Filtros</a>
                                    <ul class="mega-menu">
                                        <li><a href="#">Marca</a>
                                            <ul>
                                                <li><a href="shop.php?search=nike">Nike</a></li>
                                                <li><a href="shop.php?search=adidas">Adidas</a></li>
                                                <li><a href="shop.php?search=converse">Converse</a></li>
                                                <li><a href="shop.php?search=jordan">Jordan</a></li>
                                                <li><a href="shop.php?search=vans">Vans</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Tallas</a>
                                            <ul>
                                                <li><a href="shop.php?size=36&size2=38">36 - 38</a></li>
                                                <li><a href="shop.php?size=39&size2=41">39 - 41</a></li>
                                                <li><a href="shop.php?size=42&size2=44">42 - 44</a></li>
                                                <li><a href="shop.php?size=45&size2=48">45 - 48</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Precio</a>
                                            <ul>
                                                <li><a href="shop.php?price=0&price2=149">€0 - €150</a></li>
                                                <li><a href="shop.php?price=150&price2=299">€150 - €300</a></li>
                                                <li><a href="shop.php?price=300&price2=499">€300 - €450</a></li>
                                                <li><a href="shop.php?price=450&price2=99999">+€450</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.php?cat=novedad">Novedades</a></li>
                                        <li><a href="shop.php?cat=oferta">Ofertas</a></li>
                                        <li><a href="contact.php">Contacto</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu Area End -->
            </div>
        </div>
    </div>
</div>
<!-- header-bottom-area end -->
