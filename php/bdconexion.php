<?php
// BD conexion
    function conexion($bbdd){
       $serv="localhost";
        $usuario="root";
        $clave="";
        $con=mysqli_connect($serv,$usuario,$clave,$bbdd,"3308");
        if(mysqli_connect_errno()){
            printf("Conexion fallida: %s\n", mysqli_connect_errno());
            exit();
        }
        return $con;
    }
    
?>
