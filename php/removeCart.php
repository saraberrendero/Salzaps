<?php
    session_start();
    if(isset($_POST['sneaker'])){
        $sneaker=$_POST['sneaker'];
        $user=$_SESSION['idUser'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            // // Delete on table Cart
            $accion="DELETE FROM Cart WHERE idSneaker = $sneaker AND idUser = $user;";
            $result=mysqli_query($con,$accion);

        mysqli_close($con);
    }
?>
