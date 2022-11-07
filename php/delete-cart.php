<?php
    session_start();
    if(isset($_SESSION['idUser'])){
        $user=$_SESSION['idUser'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // Delete on table Cart
            $accion="DELETE FROM Cart WHERE idUser = $user";
            $result=mysqli_query($con,$accion);
            header('Location: ../index.php');
            exit;

        mysqli_close($con);
    }
?>