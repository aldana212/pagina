<?php
include 'C:\xampp/htdocs/pagina/php/conexion1.php';
session_start(); // Iniciamos la sesión.
if(!isset($_SESSION['usuario'])){ // Si no existe la variable de sesión, redireccionamos al index.php.
    echo '
        <script>
            alert("Por favor, debes iniciar sesion para acceder a esta página");
            window.location = "/pagina/home1.php";
        </script>
        ';
    session_destroy(); // Destruimos la sesión.
    die(); // Detenemos la ejecución del código.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
   <link rel="stylesheet" href="/pagina/css/editar.css">
   <link rel="stylesheet" href="/pagina/css/loading.css">
   <title>Reparaciones Express</title>
   <link rel="shortcut icon" href="/pagina/img/logo_favicon.jpg" type="image/x-icon">
</head>
<body id="body">


       <div>
            <div id="contenedor_carga">
                 <div id="cargar"></div>
                 <p class="message">Cargando...</p>
            </div>
      </div>



<header>
    <div class="icon_menu">
    <i class="bi bi-justify" id="boton"></i>
    </div>

    <h1 id="h1">Reparaciones Express</h1>

        <nav id="contenedor1">
            <a href="/pagina/php/cerrar_sesion.php" class="nav_link">Cerrar Sesion</a>
        </nav>
   </header>


    <div class="menu__aside" id="menu_aside">
         <div class="name_pagina">
         <i class="bi bi-house-door-fill"></i>
                  <h4>Home</h4>
         </div>

          <div class="option_menu">
              <a href="/pagina/home_admi.php">
                <div class="option">
                <i class="bi bi-house-door-fill"></i>
                    <h4>Inicio</h4>
                </div>
              </a>
              <a href="/pagina/tabla_bd.php" >
                  <div class="option">
                  <i class="bi bi-calendar-plus-fill"></i>
                      <h4>Agendamiento</h4>
                    </div>
              </a>
                  
          </div>
     </div>
   

     <?php
    $id = $_GET["id"];


    $consulta =mysqli_query($conexion, "SELECT * FROM citas  WHERE id='$id'");
      $option='';
        while ($mostrar = mysqli_fetch_array($consulta)){
            $ID=$mostrar['id'];
            $NOMBRE=$mostrar['nombre'];
            $TELEFONO = $mostrar['telefono'];
            $T_D=$mostrar['t_d'];
            $CORREO=$mostrar['correo'];
            $PLACA=$mostrar['placa'];
            $VEHICULO=$mostrar['vehiculo'];
            $FECHA=$mostrar['fecha'];
            $COMENTARIO=$mostrar['comentario'];

                if($T=$T_D == "tarjeta de identidad"){
                  $option = '<option value="'.$T_D.'" select>'.$T_D.'</option>';
                }else if($T_D== "cedula de ciudadania"){
                  $option = '<option value="'.$T_D.'" select>'.$T_D.'</option>';
                }else if($T_D == "cedula de extranjeria"){
                    $option = '<option value="'.$T_D.'" select>'.$T_D.'</option>';
                }

    ?>

    <div class="container_form">
        <div class="label">

            <form action="/pagina/php/proceso_editar.php" class="register" id="register" method="POST">
                
                <h1 class="titulo">Editar cita</h1>
                <input type="hidden" value="<?php echo $mostrar['id'];?>" name="id_citas"  class="campo">
                
                <label class="label" for="nombre">Nombre</label> 
                <input type="text" value="<?php echo $mostrar['nombre'];?>" name="nombre"  class="campo">
                
                <label class="label" for="telefono">telefono</label>
                <input type="text" value="<?php echo $mostrar['telefono'];?>" name="telefeno"  class="campo">
                
                <select name="t_d" class="campo">
                  <?php
                  echo $option;
                  ?>
                <option value="tarjeta de identidad">tarjeta de identidad</option>
                <option value="cedula de ciudadania">cedula de ciudadania</option>
                <option value="cedula de extranjeria">cedula de extranjeria</option>
               </select>
                
                <label class="label" for="identificacion">Identificacion</label>
                <input type="text" value="<?php echo $mostrar['n_documento'];?>" name="n_documento"  class="campo">
                
                <label class="label" for="correo">Correo</label>
                <input type="text" value="<?php echo $mostrar['correo'];?>" name="correo"  class="campo">
                
                <label class="label" for="placa">Placa</label>
                <input type="text" value="<?php echo $mostrar['placa'];?>" name="placa"  class="campo">
                
                <label class="label" for="vehiculo">Vehiculo</label>
                <input type="text" value="<?php echo $mostrar['vehiculo'];?>" name="vehiculo"  class="campo">
                
                <label class="label" for="fecha">fecha</label>
                <input type="date" value="<?php echo $mostrar['fecha'];?>" name="fecha"  class="campo">
                
                <label class="label" for="comentario">Comentario</label>
                <input type="text" value="<?php echo $mostrar['comentario'];?>" name="comentario"  class="campo">
                
                <button class="container-button" type="submit" id="button">actualizar</button>
            </form>
        </div>
        <?php
      }
      ?>
</div>
<script src="/pagina/js/js1.js"></script>
    <script src="/pagina/js/loading.js"></script>
</body>
</html>
