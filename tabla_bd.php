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
   <link rel="stylesheet" href="/pagina/css/home_tablas.css">
   <link rel="stylesheet" href="/pagina/css/loading.css">
   <title>Reparaciones Express</title>
  <link rel="icon" type="image/jpg" href="img/logo_favicon.jpg"/>
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
              <a href="/pagina/tabla_agen.php" >
                  <div class="option">
                  <i class="bi bi-calendar-plus-fill"></i>
                      <h4>Agendamiento</h4>
                    </div>
              </a>
                  
          </div>
     </div>
   

 <table>
   <tr id="encabezado">
     <th scope="col">id_usuario</th>
     <th scope="col">Nombre</th>
     <th scope="col">Apellido</th>
     <th scope="col">Correo</th>
     <th scope="col">Telefono</th>
     <th scope="col">Cargo</th>
     <th scope="col">Editar</th>
     <th scope="col">Eliminar</th>
   </tr>

   <?php
      $consulta = "SELECT us.id_usuario, us.nombre, us.apellido, us.correo, us.telefono, ca.descripcion FROM usuario us 
      INNER JOIN cargos ca ON us.id_cargo=ca.id";
      
      $resultado = mysqli_query($conexion, $consulta);
      while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    <tr>
      <th><?php echo $mostrar['id_usuario'];?></th>
      <th><?php echo $mostrar['nombre'];?></th>
      <th><?php echo $mostrar['apellido'];?></th>
      <th><?php echo $mostrar['correo'];?></th>
      <th><?php echo $mostrar['telefono'];?></th>
      <th><?php echo $mostrar['descripcion'];?></th>
      <th><a href="/pagina/php/editar_usuario.php?id=<?php echo $mostrar['id_usuario'];?>" class="bnt_editar">editar</a></th>
      <th><a href="/pagina/php/eliminar.php?id=<?php echo $mostrar['id_usuario'];?>" class="bnt_editar"name="texid">eliminar</a></th>
    </tr>
    <?php
          } 
    ?>
 </table>

    <script src="/pagina/js/js1.js"></script>
    <script src="js/loading.js"></script>
</body>
</html>






