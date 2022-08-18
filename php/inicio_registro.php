<?php
  //incluimos el archivo de conexion de la base de datos
  include 'C:\xampp/htdocs/pagina/php/conexion1.php';

  //capturamos los datos del formulario en variables por el metodo post y el nombre del campo del formulario 
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $contraseña=$_POST['contraseña'];
    $confirme_contraseña= $_POST['confirme_contraseña'];
    $cargo= $_POST['cargo'];
    $contraseña_hash = hash ("sha512", $contraseña); // Encriptamos la contraseña.

    $query= "INSERT INTO  usuario ( nombre, apellido, correo, telefono, contraseña, id_cargo)
    VALUE ('$nombre' , '$apellido' , '$correo', '$telefono' , '$contraseña_hash' , '$cargo')";

  $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");
 
   if(mysqli_num_rows($verificar_correo) > 0){
      
    echo '
    <script>
    alert("este correo ya esta registrado, intenta con otro diferente");    
    window.location ="/pagina/registro.php";
    </script> 
    ';  
    exit();

  }else if($contraseña != $confirme_contraseña){ // Si las contraseñas no coinciden, mostramos un mensaje de error.
    echo '
        <script>
            window.location = "/pagina/registro.php";
            alert("Las contraseñas no coinciden, intenta de nuevo.");
        </script>
    ';
    exit();
 }
//  else{

//   header("location: /pagina/administrador/php/home2.php");
//  }

 // en una variable terminaremos la consulta que realizamos llamando la conexion a la base de datos y la variable donde hicimos la consulta
 $ejecutar = mysqli_query($conexion, $query); //ejecute la consulta//

 if($ejecutar){
  echo '
    <script>
    alert("datos almacenados exitosamente, ahora debes loguearte");
    window.location ="/pagina/login.php";
    </script>
  ';
 }
 //cierra la conexion a la base de datos
 mysqli_close($conexion);

?>