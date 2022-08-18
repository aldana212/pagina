<?php

include 'C:\xampp/htdocs/pagina/php/conexion1.php';

$NOMBRE =$_POST['nombre_completo'];
$TELEFONO =$_POST['telefono'];
$T_D =$_POST['documento'];
$N_DOCUMENTO =$_POST['identificacion'];
$CORREO =$_POST['correo'];
$PLACA =$_POST['placa'];
$VEHICULO =$_POST['vehiculo'];
$FECHA =$_POST['fecha'];
$COMENTARIO =$_POST['comentario'];


$query = "INSERT INTO citas (nombre, telefono, t_d, n_documento, correo, placa, vehiculo,fecha, comentario)
          VALUE ('$NOMBRE' , '$TELEFONO' , '$T_D' , '$N_DOCUMENTO' , '$CORREO' , '$PLACA' , '$VEHICULO' , '$FECHA', '$COMENTARIO') ";


 $ejecutar = mysqli_query($conexion, $query); //ejecute la consulta//

 if($ejecutar){
  echo '
    <script>
    alert("datos almacenados exitosamente");
    window.location ="/pagina/home_usuario.php";
    </script>
  ';
 }







?>