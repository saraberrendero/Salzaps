<?php
    session_start();
    if(isset($_POST['type']) && isset($_POST['number']) && isset($_POST['name'])){
        $type=$_POST['type'];
        $number=$_POST['number'];
        $name=$_POST['name'];
        $user=$_SESSION['idUser'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // Insert on table Wishlist
            $accion="INSERT INTO Cards (type_, number_, idUser, cName) VALUES ('$type', '$number', $user, '$name');";
            $result=mysqli_query($con,$accion);

        mysqli_close($con);
    }
    header('Location: ../my-account.php');
    exit;
?>