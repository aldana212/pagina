<?php
      //estamos iniciando la variable session para utilizar una variable session
         session_start();

         //incluimos el archivo de conexion de la base de datos
         include 'conexion1.php';

         //capturamos los datos del login en variables por el metodo post y el nombre de cada campo del login 
         $correo = $_POST['correo'];
         $contraseña = $_POST['contraseña'];

         // $contrasena_hash = hash ("sha256", $contrasena); // Desencriptamos la contraseña.
         

         //creamos una variable para capturar la consulta
         // mysqli_query es una funcion que se utiliza para consultar  seguido de la variable conexion que es para que vaya y consulte en la conexion de base de dato
          //y mire si en la base de datos esta el correo y contraseña almacenados
         $validar_login = mysqli_query ($conexion, "SELECT * FROM usuario WHERE correo='$correo' and contraseña='$contraseña'"); 

         //con un if ponemos una condicion,el mysqli_num_rows es una funcion que recorre en la base de datos linea por linea buscando la consulta(si esta el correo y contraseña)
         //si esta la consulta en la base de datos me redirecciona a la pagina secundaria si no me sale una alerta y me vuelve a redireccionar al login
         if(mysqli_num_rows($validar_login) > 0){
            // $_SESSION['usuario'] = esto es una variable session que es lo que se almacena en el cache del navegador,  osea que en el cache se almacena el correo logueado y tambien para poner las restricciones
            $_SESSION['usuario'] = $correo;
            //header= redireccionay funciona con php
            header("location: /pagina/administrador/php/home2.php");
            exit(); 
         
         }else{
         echo '
         <script>
         alert("el correo o contraseña estan incorrecta, intenta nuevamente");    
            window.location ="/pagina/administrador/login.php";
         </script> 
         ';  
         exit();
         }

?>