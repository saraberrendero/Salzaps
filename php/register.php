<?php
    if(isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['nom'])){
        $nom=$_POST['nom'];
        $pass= password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $mail=$_POST['mail'];
        require("bdconexion.php");
            $con=conexion("salzaps");      
            // Insert on table Users
            $accion="INSERT INTO Users (userName, password, mail, admin_) VALUES ('$nom', '$pass', '$mail', 0);";
            $result=mysqli_query($con,$accion);
        mysqli_close($con);
        
        $to      = $mail; // User email
        $subject = 'Registro con éxito'; // Topic of the email 
        $message = '

        Gracias por registrarse!
        Tu cuenta ha sido registrada con éxito. Ya puede iniciar sesión y disfrutar de todas las ventajas que dispone.
        '; // Message of the email

        $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Company email
        mail($to, $subject, $message, $headers); // Send it
    }
?>
