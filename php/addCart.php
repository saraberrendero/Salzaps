<?php
session_start();
    if (!isset($_SESSION['user'])){
        header('Location: ../login-register.php');
        exit;
    }
    if(isset($_POST['cod'])){
        $sneaker=$_POST['cod'];
        $qty=$_POST['qty'];
        $user=$_SESSION['idUser'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // Insert on table Cart
            $accion="INSERT INTO Cart (idSneaker,idUser,quantity) VALUES ($sneaker, $user, $qty);";
            $result=mysqli_query($con,$accion);

        mysqli_close($con);
    }
header('Location: ../single-product.php?cod='.$_POST['cod'].'');
?>
