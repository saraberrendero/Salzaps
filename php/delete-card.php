<?php
    session_start();
    if(isset($_GET['cod'])){
        $card=$_GET['cod'];
        $user=$_SESSION['idUser'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // Delete on table Cards
            $accion="DELETE FROM Cards WHERE idCard = $card AND idUser = $user;";
            $result=mysqli_query($con,$accion);
            header('Location: ../my-account.php');
            exit;

        mysqli_close($con);
    }
?>