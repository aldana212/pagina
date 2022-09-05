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
  <link rel="stylesheet" href="/pagina/css/editar_usuario.css">
  <link rel="stylesheet" href="/pagina/css/loading.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="/pagina/img/logo_favicon.jpg" type="image/x-icon">

  <title>Document</title>
</head>
<body>
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
       <a href="/pagina/tabla_agen.php" >
           <div class="option">
           <i class="bi bi-calendar-plus-fill"></i>
               <h4>Agendamiento</h4>
             </div>
       </a>
           
   </div>
</div>
<div class="edit">
    <?php

  $id = $_GET["id"];

  $consulta = "SELECT usa.id_usuario, usa.nombre, usa.apellido, usa.correo, usa.telefono, car.id, car.descripcion FROM usuario usa
    INNER JOIN cargos car ON usa.id_cargo=car.id WHERE usa.id_usuario='$id'";
    $sql = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($sql);
    if($resultado == 0){
      header('location: /pagina/tabla_bd.php');
    }else{
      $option ='';
      while ($mostrar = mysqli_fetch_array($sql)){
        $id_usuario= $mostrar['id_usuario'];
        $nombre= $mostrar['nombre'];
        $apellido= $mostrar['apellido'];
        $correo= $mostrar['correo'];
        $telefono= $mostrar['telefono'];
        $id= $mostrar['id'];
        $descripcion= $mostrar['descripcion'];
          
          if($id == 1){
          $option = '<option value="'.$id.'" select>'.$descripcion.'</option>';
          }else if($id == 2){
            $option = '<option value="'.$id.'" select>'.$descripcion.'</option>';
          }else if($id == 3){
            $option = '<option value="'.$id.'" select>'.$descripcion.'</option>';
          }

        }
      }
      ?>
              <form action="/pagina/php/proceso_editar.php" method="POST">
                  <input type="hidden" value="<?php echo $id_usuario;?>" name="id_usuario">
                  <label for="nombre">Nombre</label>
                  <input type="text" value="<?php echo $nombre;?>" name="nombre">
                  <label for="apellido">Apellido</label>
                  <input type="text" value="<?php echo $apellido;?>" name="apellido">
                  <label for="correo">Correo</label>
                  <input type="text" value="<?php echo  $correo;?>" name="correo">
                  <label for="telefono">Telefono</label>
                  <input type="text" value="<?php echo $telefono;?>" name="telefono">
                  <label for="rol" name="">Tipo de usuario</label>
                  <?php

                      $query_rol = mysqli_query($conexion, "SELECT * FROM cargos");
                      $result_rol = mysqli_num_rows($query_rol);        
                      ?>

                      <select name="descripcion" class="tipo">
                      <?php

                      echo $option;

                      if($result_rol > 0){

                          while($rol= mysqli_fetch_array($query_rol)){
                      ?>

                      <option value="<?php echo $rol["id"]; ?>"><?php echo $rol["descripcion"]; ?></option>
                      
                      <?php
                          }
                          }
                      ?>  
                      </select>
                  <button>Actualizar</button>
              </form>
        </div>

    <script src="/pagina/js/js1.js"></script>
    <script src="/pagina/js/loading.js"></script>

</body>
</html>

