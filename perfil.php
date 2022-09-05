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
    <title>Reparaciones Express</title>
    <link rel="stylesheet" href="/pagina/css/perfil.css">
    <link rel="stylesheet" href="/pagina/css/loading.css">
    <link rel="icon" type="image/jpg" href="img/logo_favicon.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

       <div>
            <div id="contenedor_carga">
                 <div id="cargar"></div>
                 <p class="message">Cargando...</p>
            </div>
      </div>
     
    <div class="wrapper">
        <header>
            <a class="logo" href="#">
           <img src="/pagina/img/logo_completo.jpg " alt="Imagen del logo de Reparaciones Express">
           <h2 class="nombre_empresa">Reparaciones Express</h2>
          </a>
         
         <nav>
            <a href="/pagina/home_usuario.php" class="nav_link">Inicio</a>
            <a href="/pagina/php/cerrar_sesion.php" class="nav_link">Cerrar Sesion</a>
        </nav>
         
</header> 
<div class="update-profile">

    <div class="Foto">
     <img src="img/user.jpg" alt="" srcset="">
    </div>
    
    <?php
        $perfil= $_SESSION['usuario'];
        
        $consulta = "SELECT * FROM usuario WHERE correo='$perfil'";
       $data = mysqli_query($conexion,$consulta);
        while($consulta1=mysqli_fetch_array($data)){
        ?>   
        <form action="/pagina/php/proceso_editar.php" method="post" enctype="multipart/form-data">
        <div class="flex">
             <!--  -->
            <div class="inputBox">
                <input type="hidden" name="ID" value="<?php echo $consulta1['id_usuario'];?>">
                <span>Nombre :</span>
                <input type="text" name="NOMBRE" value="<?php echo $consulta1['nombre']; ?>" class="box">
                <span>Apellido :</span>
                <input type="text" name="APELLIDO" value="<?php echo $consulta1['apellido']; ?>" class="box">
                <span>Correo :</span>
                <input type="text" name="CORREO" value="<?php echo $consulta1['correo']; ?>" class="box">
            </div>
            <div class="inputBox">
                <input type="hidden" name="old_pass" value="<?php echo $consulta1['correo']; ?>">
                <span>Telefonoo:</span>
                <input type="text" name="TELEFONO" value="<?php echo $consulta1['telefono']; ?>" class="box">
                <span>Ciudad :</span>
                <input type="text" name="CIUDAD" value="<?php echo $consulta1['ciudad']; ?>" class="box">
                <span>Ocupacion :</span>
                <input type="text" name="OCUPACION" value="<?php echo $consulta1['ocupacion']; ?>"  class="box">
            </div>
        </div>
        <input type="submit" value="Actualizar" name="update_profile" class="btn">
         <a href="/pagina/php/eliminar.php?id_perfil1=<?php echo $consulta1['id_usuario'];?>" class="btn" name="texid">Eliminar</a>
        </form>
        <?php
                } 
                ?>
</div>

<footer>
    <div class="footer1">
       <div class="container-body">
           <div class="colum1">
               <h1> Mas de nuestra pagina</h1>
               <p>Con el objetivo de mejorar la experiencia de nuestros consumidores y de brindarte información y sugerencias que se ajusten a tus preferencias y hábitos de navegación, es importante para nosotros que conozcas y aceptes nuestra Política de manejo</p>
           </div>
          <div class="colum2">
               <h1>Redes Sociales</h1>
               
               <div class="icono">
               <i class="bi bi-facebook"></i>
                   <label>Siguenos en Faceboock</label>
               </div>

               <div class="icono">
               <i class="bi bi-instagram"></i>
                   <label>Siguenos Instagram</label>
               </div>

               <div class="icono">
               <i class="bi bi-whatsapp"></i>
                   <label>Contactano por Whatsapp</label>
               </div>
          </div>
          <div class="colum3">
             <h1>Imformacion de Contacto</h1>
           
               <div class="icono1">
               <i class="bi bi-house-door-fill"></i>
                       <label>Carrera 14 #45</label>
               </div>

               <div class="icono1">
               <i class="bi bi-telephone-fill"></i>
                       <label>+57 32231776618</label>
               </div>

               <div class="icono1">
               <i class="bi bi-envelope-fill"></i>
                       <label> Correo:
                        ReparaExpress@gmail.com
                       </label>
               </div>
          </div>
          
       </div>
   </div>
    </div>
 </footer>
 <script src="/pagina/js/javaS.js"></script>
 <script src="js/loading.js"></script>
</body>

</html>