<?php
  //incluimos el archivo de conexion de la base de datos
 include 'conexion1.php';

  //capturamos los datos del formulario en variables por el metodo post y el nombre del campo del formulario 
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $contraseña=$_POST['contraseña'];
    $confirme_contraseña= $_POST['confirme_contraseña'];

   //  $contraseña_hash = hash ("sha256", $contraseña); // Encriptamos la contraseña.

    //utlizamos una variable para hacer el proceso para insertar los datos a la base de datos usando los campos que estan en la base de datos mysql
    $query="INSERT INTO  usuario ( nombre, apellido, correo, telefono, contraseña)
    VALUE ('$nombre' , '$apellido' , '$correo', '$telefono' , '$contraseña')";


  //utilizamos una variable para almacenar la consulta que vamos a realizar que es verificar que el correo no se repita
  // mysqli_query es una funcion que se utiliza para consultar  seguido de la variable conexion que es para que vaya y consulte en la conexion de base de datos
  //y mire si en la tabla usuario hay un correo
  $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");

  //usamos una estructura de condiccion para validar la consulta 
    //el mysqli_num_rows es una funcion que recorre en la base de datos linea por linea buscando la consulta(si esta el correo)
  // si se repite mas de 1 vez es por que el correo ya esta en la base de datos  va salir una alerta y finalizara la ejecucion 
  if(mysqli_num_rows($verificar_correo) > 0){
      
    echo '
    <script>
    alert("este correo ya esta registrado, intenta con otro diferente");    
    window.location ="/pagina/administrador/registro.php";
    </script> 
    ';  
    exit();

    //usaremos otra condicion para verificar si las contraseñas si conciden si las contraseñas no coinciden me va a salir la siguiente alerta y finalizara la ejecucion
    // y me devolvera al registro 
  }else if($contraseña != $confirme_contraseña){ // Si las contraseñas no coinciden, mostramos un mensaje de error.
    echo '
        <script>
            window.location = "/pagina/administrador/registro.php";
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
    window.location ="/pagina/administrador/login.php";
    </script>
  ';
 }
 //cierra la conexion a la base de datos
 mysqli_close($conexion);

?>