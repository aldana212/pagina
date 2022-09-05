<?php
include 'C:\xampp/htdocs/pagina/php/conexion1.php';
session_start();

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

$perfil= $_SESSION['usuario'];
$data = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo='$perfil'");

while($consulta=mysqli_fetch_array($data)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="/pagina/css/citas.css">
  <link rel="stylesheet" href="/pagina/css/loading.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  <title>Reparaciones Express</title>
  <link rel="icon" type="image/jpg" href="img/logo_favicon.jpg" />
</head>
<body id="body">


       <div>
            <div id="contenedor_carga">
                 <div id="cargar"></div>
                 <p class="message">Cargando...</p>
            </div>
      </div>

      <header>
        <a class="logo_nav" href="/pagina/home1.php">
            <img src="img/logo_completo.jpg" alt="Imagen del logo de Reparaciones Express">
            <h2 class="nombre_empresa">Reparaciones Express</h2>
        </a>

        <nav>
            <a href="/pagina/home_usuario.php" class="nav_link">Inicio</a>
            <a href="/pagina/php/cerrar_sesion.php" class="nav_link">Cerrar Sesion</a>

        </nav>

    </header>
    <br>

  <div class="container_form">
    <div class="info_form">
     <h2>¿Quieres agendar una cita?</h2>
      <p> <?php echo $consulta['nombre'];?>  Para agendar una cita debes completar los campos requeridos, Como: Nombre completo, Telefono, Tipo de documento, Info del veiculo, Dia deseado para la cita, Entre otros datos... </p>
      <img src="img/agendar.png" alt="" srcset="">
  </div>

    <?php
    }
    ?>
    <form action="/pagina/php/citas.php" class="register" id="register" method="POST">

    <h2 class="titulo">Agenda tu cita</h2>

    <input type="text" name="nombre_completo" class="campo"  placeholder="nombre_completo">

    <input type="text" name="telefono" class="campo" placeholder="Telefono">

    <select name="documento" class="campo">
        <option value="tipo de documento">tipo de documento</option>
        <option value="tarjeta de identidad">tarjeta de identidad</option>
        <option value="cedula de ciudadania">cedula de ciudadania</option>
        <option value="cedula de extranjeria">cedula de extranjeria</option>
    </select>

    <input type="text" name="identificacion" class="campo" placeholder="Numero de identificacion">

    <input type="text" name="correo" class="campo" placeholder="correo">

    <input type="text" name="placa" class="campo" placeholder="placa">

    <input type="text" name="vehiculo" class="campo" placeholder="vehiculo">

    <input type="date" name="fecha" class="campo" placeholder="fecha">

    <textarea name="comentario" cols="30" rows="10"  placeholder="comentario"></textarea> 

     <!-- <div>
       <input type="checkbox" name="Terminos_condiciones" class="check" id="Terminos_condiciones" required><a class="vinculo" href="#">Aceptar terminos y condiciones</a>
     </div> -->
     
            <button class="container-button" type="submit" id="button">Registrar</button>
    </form>
  </div>

  <footer>
            <div class="footer1">
               <div class="container-body">
                   <div class="colum1">
                       <h2> Mas informacion de Reparaciones Express</h2>
                       <p>Con el objetivo de mejorar la experiencia de nuestros consumidores y de brindarte información y sugerencias que se ajusten a tus preferencias y hábitos de navegación, es importante para nosotros que conozcas y aceptes nuestra Política de manejo</p>
                   </div>
                  <div class="colum2">
                       <h2>Redes sociales</h2>
                       
                       <a class="icono">
                       <i class="bi bi-facebook"></i>
                           <label>Siguenos en facebook</label>
                       </a>
       
                       <div class="icono">
                       <i class="bi bi-instagram"></i>
                           <label>Siguenos en instagram</label>
                       </div>
       
                       <div class="icono">
                       <i class="bi bi-whatsapp"></i>
                           <label>Siguenos en whatsapp</label>
                        </div>
                  </div>
                  <div class="colum3">
                     <h2>Informacion de contacto</h2>
                   
                     <div class="icono1" id="icono1">
                       <i class="bi bi-house-door-fill"></i>
                               <label>Carrera 14 #45</label>
                       </div>
       
                       <div class="icono1">
                           <i class="bi bi-telephone-fill"></i>
                               <label>3207430224</label>
                            </div>
       
                            <div class="icono1">
                       <i class="bi bi-envelope-fill"></i>
                               <label>ReparacionesExpress@gmail.com</label>
                       </div>
                  </div>   
               </div>   
            </div>
    </footer>


    <script src="js/js2.js"></script>
    <script src="js/loading.js"></script>

</body>
</html> 