<?php
    session_start();
    if(isset($_POST['mail']) && isset($_POST['pass'])){
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        require("bdconexion.php");
            $con=conexion("salzaps");
            $accion="select * from users where mail='$mail'";
            $result=mysqli_query($con,$accion);
            $datos=mysqli_fetch_array($result);
            // Password validation
            if(password_verify($pass, $datos["password"])){
                // Send info to the sessions
                $_SESSION['user'] = $datos["userName"];
                $_SESSION['idUser'] = $datos["idUser"];
                if($datos["admin_"]==1){
                   $_SESSION['admin'] = 1;
                }
            }
            else{
                echo "<p><b>El email o la contraseña introducidos no son correctos</b></p>";
            }

        mysqli_close($con);
    }
?>
