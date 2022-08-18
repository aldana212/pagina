<?php
         session_start();
         include 'C:\xampp/htdocs/pagina/php/conexion1.php';

         $correo = $_POST['correo'];
         $contraseña = $_POST['contraseña'];

         $contraseña_hash = hash ("sha512", $contraseña); // Desencriptamos la contraseña.
         
         $validar_login = mysqli_query ($conexion, "SELECT * FROM usuario WHERE correo='$correo' and contraseña='$contraseña_hash'");
          
         if($rol = mysqli_fetch_array($validar_login)){

         if($rol['id_cargo']==1){//administrador
            $_SESSION['usuario'] = $correo;
             header('location:/pagina/home_admi.php');
             die();

         }else if($rol['id_cargo']==2){//usuario
         $_SESSION['usuario'] = $correo;
           header('location:/pagina/home_usuario.php');
           die();
        
         }else if($rol['id_cargo']==3){//empleado
            $_SESSION['usuario'] = $correo;
              header('location:/pagina/en_proceso/perfil.php');
              die();
         }
        }else{
          echo '
           <script>
          alert("el correo o contraseña estan incorrecta, intenta nuevamente");    
             window.location ="/pagina/login.php";
          </script> 
          ';  
          }

?>