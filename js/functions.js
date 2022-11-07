        // Función que que conecta con el php register
        function register() {
            var mail = $("#email").val();
            var pass = $("#password").val();
            var usname = $("#username").val();
            var peticion = $.ajax({
                url: "php/register.php",
                type: "POST",
                async: true,
                data: {
                    nom: usname,
                    pass: pass,
                    mail: mail
                },
                success: function (data) {
                    $(location).attr('href', 'register-succes.php');
                }
            })
        }
        // Función que que conecta con el php login
        function login() {
            var mail = $("#logmail").val();
            var pass = $("#logpass").val();
            var peticion = $.ajax({
                url: "php/login.php",
                type: "POST",
                async: true,
                data: {
                    mail: mail,
                    pass: pass
                },
                success: function (data) {
                    if (peticion.responseText) {
                        $("#wronglogin").html(peticion.responseText);
                    } else
                        window.location.replace("index.php");
                }
            })
        }

        // Función que que conecta con el php register
        function publish() {
            var info = $("#reviewinfo").val();
            var rating = $("input:radio[name=rating]:checked").val();
            var usname = $("#rname").val();
            var sneaker = $("#sneaker").val();
            var peticion = $.ajax({
                url: "php/publishReview.php",
                type: "POST",
                async: true,
                data: {
                    nom: usname,
                    rating: rating,
                    info: info,
                    sneaker: sneaker
                },
                success: function (data) {
                    location.reload();
                }
            })
        }
        // Función que que conecta con el php sneakerSizes
        function checksizes() {
            var sneaker = $("#sneaker").val();
            var peticion = $.ajax({
                url: "php/sneakerSizes.php",
                type: "POST",
                async: true,
                data: {
                    sneaker: sneaker
                },
                success: function (data) {
                    $("#sizes").html(peticion.responseText);
                }
            })
        }
        // Función que que conecta con el php addWishlist
        function addwish(zCode) {
            var peticion = $.ajax({
                url: "php/addWishlist.php",
                type: "POST",
                async: true,
                data: {
                    sneaker: zCode
                },
                success: function (data) {
                    $(location).attr('href', 'wishlist.php');
                }
            })
        }
        // Función que que conecta con el php removeWishlist
        function remwish(zCode) {
            var peticion = $.ajax({
                url: "php/removeWishlist.php",
                type: "POST",
                async: true,
                data: {
                    sneaker: zCode
                },
                success: function (data) {
                    $(location).attr('href', 'wishlist.php');
                }
            })
        }
        // Función que que conecta con el php removeCart
        function remcart(zCode) {
            var peticion = $.ajax({
                url: "php/removeCart.php",
                type: "POST",
                async: true,
                data: {
                    sneaker: zCode
                },
                success: function (data) {
                    $(location).attr('href', 'cart.php');
                }
            })
        }

        function checkAcceptCookies() {
            if (localStorage.acceptCookies == 'true') {
            } else {
                $('#div-cookies').show();
            }
            totalcart();
        }
        function acceptCookies() {
            localStorage.acceptCookies = 'true';
            $('#div-cookies').hide();
        }
        function totalcart(){
            var total = $('#totalofproducts').val();
            $('#totalitems').html(total);
        }
