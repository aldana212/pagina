<?php
         session_start();
         include 'conexion1.php';
         $contraseña = $_POST['contraseña'];
         $confirmar_contraseña = $_POST['confirmar_contraseña'];
         $correo=$_POST['correo'];
         $contraseña_hash = hash ("sha512", $contraseña); // Desencriptamos la contraseña.
         if($contraseña != $confirmar_contraseña){ // Si las contraseñas no coinciden, mostramos un mensaje de error.
            echo '
                <script>
                    alert("Las contraseñas no coinciden, intenta de nuevo.");
                </script>
            ';
            exit();
         }else{
          $slq = mysqli_query($conexion, "UPDATE `usuario` SET `contraseña` = '$contraseña_hash'
          WHERE `correo` = '$correo'");
          echo '
          <script>
              alert("actualizo correctamente.");
              window.location ="/pagina/login.php";
          </script>
      ';

           };
?>