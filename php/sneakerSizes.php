<?php
    if(isset($_POST['sneaker'])){
        $sneaker=$_POST['sneaker'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            $accion="select * from storage_ where idSneaker='$sneaker' and stock > 0";
            $result=mysqli_query($con,$accion);
            while($datos=mysqli_fetch_array($result)){
                echo '<option title="'.$datos["size_"].'" value="'.$datos["size_"].'">'.$datos["size_"].'</option>';
            }

        mysqli_close($con);
    }
?>