<?php
    session_start();
    if(isset($_POST['sneaker'])){
        $sneaker=$_POST['sneaker'];
        $user=$_SESSION['idUser'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // Insert en tabla Wishlist
            $accion="INSERT INTO Wishlist (idSneaker,idUser) VALUES ($sneaker, $user);";
            $result=mysqli_query($con,$accion);

        mysqli_close($con);
    }
?>