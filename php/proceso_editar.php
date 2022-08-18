<?php
    include 'C:\xampp/htdocs/pagina/php/conexion1.php';
    
//  proceso de editar base de datos
if($_POST['id_usuario']){
    $ID_USUARIO=$_POST['id_usuario'];
    $NOMBRE_USUARIO=$_POST['nombre'];
    $APELLIDO_USUARIO=$_POST['apellido'];
    $CORREO_USUARIO=$_POST['correo'];
    $TELEFONO_USUARIO=$_POST['telefono'];
    $CARGO_USUARIO=$_POST['descripcion'];

   $actualizar_usuario = mysqli_query($conexion, "UPDATE `usuario` SET `nombre` = '$NOMBRE_USUARIO', `apellido` = '$APELLIDO_USUARIO',
   `correo` = '$CORREO_USUARIO', `telefono` = ' $TELEFONO_USUARIO' , `id_cargo` = '$CARGO_USUARIO'  WHERE `usuario`.`id_usuario` = '$ID_USUARIO'");

    if($actualizar_usuario){
      echo '
        <script>
        alert("actualizacion correctamente");
        window.location ="/pagina/tabla_bd.php";
        </script>
      ';
      exit();
    }
}

// proceso para editar citas
else if($_POST['id_citas']){
    $ID_CITA=$_POST['id_citas'];
    $NOMBRE_CITA=$_POST['nombre'];
    $TELEFONO_CITA = $_POST['telefeno'];
    $T_D=$_POST['t_d'];
    $CORREO_CITA=$_POST['correo'];
    $PLACA=$_POST['placa'];
    $VEHICULO=$_POST['vehiculo'];
    $FECHA=$_POST['fecha'];
    $COMENTARIO=$_POST['comentario'];

   $actualizar_cita = mysqli_query($conexion, "UPDATE `citas` SET `nombre` = '$NOMBRE_CITA', `telefono` = '$TELEFONO_CITA',
   `t_d` = '$T_D', `correo` = ' $CORREO_CITA' , `placa` = '$PLACA' , `vehiculo` = '$VEHICULO' , `fecha` = '$FECHA' , `comentario` = '$COMENTARIO'  WHERE `citas`.`id` = '$ID_CITA'");

    if($actualizar_cita){
      echo '
        <script>
        alert("actualizacion correctamente");
        window.location ="/pagina/tabla_agen.php";
        </script>
      ';
      exit();
    }
}

  // proceso de editar perfil
   
else if($_POST['ID']){

    $id_perfil=$_POST['ID'];
    $nombre_perfil=$_POST['NOMBRE'];
    $apellido_perfil=$_POST['APELLIDO'];
    $correo_perfil=$_POST['CORREO'];
    $telefono_perfil=$_POST['TELEFONO'];
    $ciudad_perfil =$_POST['CIUDAD'];
    $ocupacion_perfil =$_POST['OCUPACION'];

     $actualizar_perfil = mysqli_query($conexion, "UPDATE `usuario` SET `nombre` = '$nombre_perfil', `apellido` = '$apellido_perfil',
     `correo` = '$correo_perfil', `telefono` = ' $telefono_perfil', `ciudad` = ' $ciudad_perfil', `ocupacion` = ' $ocupacion_perfil' WHERE `usuario`.`id_usuario` = '$id_perfil'");

    if($actualizar_perfil){
      echo '
        <script>
        alert("actualizacion correctamente");
        window.location ="/pagina/perfil.php";
        </script>
      ';
      exit();
  }
}

mysqli_close($conexion);


?>