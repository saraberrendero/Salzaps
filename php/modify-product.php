<?php
    if(isset($_POST['cod'])){
        $sneaker=$_POST['cod'];
        $name=$_POST['name'];
        $brand=$_POST['brand'];
        $cat=$_POST['cat'];
        $gen=$_POST['genre'];
        $price=$_POST['price'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // Hacemos el delete en la tabla Wishlist
            $accion="UPDATE sneakers SET name = '$name', brand= '$brand', genre = '$gen', category = '$cat', price = $price WHERE idSneaker = $sneaker";
            $result=mysqli_query($con,$accion);

        mysqli_close($con);
    }
    header('Location: ../administration.php');
    exit;
?>