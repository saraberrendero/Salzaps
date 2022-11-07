<?php
        $nom=$_POST['nom'];
        $info= $_POST['info'];
        $rating=$_POST['rating'];
        $sneaker=$_POST['sneaker'];
        require("bdconexion.php");
            $con=conexion("salzaps");      
            // Insert on table Reviews
            $accion="INSERT INTO Reviews (idSneaker, rName, review, review_Date, rating) VALUES ($sneaker, '$nom', '$info', CURDATE(),$rating);";
            $result=mysqli_query($con,$accion);
        mysqli_close($con);
    
?>