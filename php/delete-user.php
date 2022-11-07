<?php
    if(isset($_GET['cod'])){
        $user=$_GET['cod'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // Delete on table Users
            $accion="DELETE FROM Users WHERE idUser = $user AND admin_ = 0;";
            $result=mysqli_query($con,$accion);
            header('Location: ../administration.php');
            exit;

        mysqli_close($con);
    }
?>