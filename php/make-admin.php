<?php
    if(isset($_GET['cod'])){
        $user=$_GET['cod'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            $accion="UPDATE Users SET admin_ = '1' WHERE idUser = $user";
            $result=mysqli_query($con,$accion);
            header('Location: ../administration.php');
            exit;

        mysqli_close($con);
    }
?>