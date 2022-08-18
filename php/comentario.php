<?php

include 'C:\xampp/htdocs/pagina/php/conexion1.php';

$correo = $_POST['correo'];
$comentario = $_POST['comentario'];


$query = "INSERT INTO comentarios ( correo , comentario)
          VALUE ('$correo' , '$comentario')";


 $ejecutar = mysqli_query($conexion, $query); //ejecute la consulta//

 if($ejecutar){
  echo '
    <script>
    alert("datos almacenados exitosamente");
    window.location ="/pagina/home1.php";
    </script>
  ';
 }







?>