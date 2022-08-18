<?php
 include 'C:\xampp/htdocs/pagina/php/conexion1.php';
    session_start(); 
    if(!isset($_SESSION['usuario'])){ 
        echo '
            <script>
                alert("Por favor, debes iniciar sesion para acceder a esta página");
                window.location = "/pagina/home1.php";
            </script>
            ';
        session_destroy(); 
        die(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pagina/css/home_usuario.css">
    <link rel="stylesheet" href="/pagina/css/loading.css">
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
    <div class="icon_menu">
    <i class="bi bi-justify" id="boton"></i>
    </div>

    <h1 id="h1">Reparaciones Express</h1>
     
    <div class="PERFIL" id="contenedor1">
            <div class="perfil" id="foto_usuario">
                <i class="bi bi-person-circle" class="foto_usuario"></i>
            </div>
            <?php
            
            $perfil= $_SESSION['usuario'];
            $consulta =  mysqli_query($conexion,"SELECT * FROM usuario WHERE correo='$perfil'");
            while($consulta1 = mysqli_fetch_array($consulta)){
            ?>
            <div class="menu" id="menu1">
                <h3><?php echo $consulta1['nombre']." ".$consulta1['apellido'];?></h3>
                <ul>
                    <li><img src="img/user.png" alt=""><a href="/pagina/perfil.php">Mi Perfil</a></li>
                    <li><img src="img/log-out.png" alt=""><a href="/pagina/php/cerrar_sesion.php">Cerrar Sesión</a></li>
                </ul>
            </div>

    </div>
    <?php
            }
            ?>
    
   </header>

   <div class="menu__aside" id="menu_aside">
        <div class="name_pagina">
        <i class="bi bi-house-door-fill"></i>
            <h4>Home</h4>
        </div>

        <div class="option_menu">
            <!-- <a href="/pagina/perfil.php">
                <div class="option">
                <i class="bi bi-person-fill"></i>
                    <h4>perfil</h4>
                </div>
            </a> -->
            <a href="/pagina/agendamiento.php" >
                <div class="option">
                <i class="bi bi-calendar-plus-fill"></i>
                    <h4>Agendamiento</h4>
                </div>
             </a>
             <!-- <a href="">
                <div class="option">
                <i class="bi bi-chat-dots-fill"></i>
                <h4>Chat</h4>
                </div>
             </a>
             <a href="">
                <div class="option">
                <i class="bi bi-car-front-fill"></i>
                   <h4>Observacion de vehiculo</h4>
                </div>
            </a>
             
            <a href=""> 
                <div class="option"> 
                <i class="bi bi-currency-dollar"></i>
                <h4>Forma de pago</h4>
                </div>
            </a> -->
      </div>
  </div>

  <section class="contenido">
    <div class="titulo">
    <h2>Servicios</h2>
    </div>
    <article>
        <div class="informacion">
                    <a href="#">Mantenimiento</a>
                    
                    <img src="img/mantenimiento.jpg" alt="matenimiento">
                    <p>Una de las mejores maneras de garantizar que tu auto tenga una excelente vida útil es llevando a cabo los controles de mantenimiento correctivo Aunque algunas reparaciones a veces son inevitables, las revisiones de mantenimiento pueden ayudarte a evitar reparaciones costosas en el futuro ahorrándote dinero, manteniendo a tus pasajeros seguros y a tu vehículo en buenas condiciones.
                    
                        <p> Mantenimiento correctivo:</p>
                        
                        <p> aquel en el que se reparan las diferentes partes del vehículo en el momento en que dejan de funcionar o empiezan a fallar.</p>
                        </p>
      </div>


        <div class="informacion">
            <a href="#">Reparacion</a>
            <img src="img/reparacion.jpg" alt="matenimiento">
            <p>La reparación muchas veces no suele esperar, es un servicio que puede requerirse con mucha urgencia y en Autoservicio Mitsubishi estamos preparados para ser de gran ayuda en esos momentos.</p>
            
            <p> Es un servicio muy común, de alta demanda, porque así como nuestros vehículos cuentan con diferentes partes, elementos y sistemas para funcionar correctamente, éstos suelen averiarse por el uso diario. En nuestro taller automotriz realizamos las reparaciones con piezas originales y con garantía justa.</p>    
       </div>

       

       <div class="informacion">
            <a href="#"></a>Mecanica general</a>
            <img src="img/mecanica.jpg" alt="matenimiento">
            <p>En el taller mecánico automotriz, tenemos como objetivo reparar y realizar el mantenimiento periódico del vehículo, con el fin de conocer el funcionamiento por ejemplo de la combustión del motor, el cual es parte fundamental de éste.</p>
  
            <p>  Además, se familiariza con cada una de las partes del vehículo, para así desmontarlas y ensamblarlas para su reparación.</p>
       </div>

       

       <div class="informacion">
            <a href="#">Latoreria y pinturas</a>
            <img src="img/pintura.jpg" alt="matenimiento">
            <p>Son dos procesos que permiten reparar y embellecer el vehículo, los cuales deben iniciar con el lavado de éste, luego el automotor pasa a una zona de desarme de las partes afectadas que requieran reparación o que ameriten un cambio definitivo.
             Además se retiran las partes que dificultan el proceso de limpieza uniforme (boceles, logotipos y empaques) y se cubren vidrios, espejos retrovisores, manijas y cilindros de puertas para evitar imperfecciones.</p>
                
            <p> Lo primero que se realiza es el lavado del vehículo, en donde se procede a la aplicación de los fondos, que son la base de la pintura.</p>  
      </div>

       

       <div class="informacion">
            <a href="#">Sistema de frenos</a>
            <img src="img/frenos.jpg" alt="matenimiento">
            <p>La reparación muchas veces no suele esperar, es un servicio que puede requerirse con mucha urgencia y en Autoservicio Mitsubishi estamos preparados para ser de gran ayuda en esos momentos. </p>
                
            <p> Es un servicio muy común, de alta demanda, porque así como nuestros vehículos cuentan con diferentes partes, elementos y sistemas para funcionar correctamente, éstos suelen averiarse por el uso diario. En nuestro taller automotriz realizamos las reparaciones con piezas originales y con garantía justa.</p>
      </div>

       

        <div class="informacion">
                <a href="#">Transmision</a>
                <img src="img/transmision.jpg" alt="matenimiento">
                <p>La reparación muchas veces no suele esperar, es un servicio que puede requerirse con mucha urgencia y en Autoservicio Mitsubishi estamos preparados para ser de gran ayuda en esos momentos.</p>
                <p> Es un servicio muy común, de alta demanda, porque así como nuestros vehículos cuentan con diferentes partes, elementos y sistemas para funcionar correctamente, éstos suelen averiarse por el uso diario. En nuestro taller automotriz realizamos las reparaciones con piezas originales y con garantía justa.</p>
        </div>

    </article>
</section>       

<footer>
            <div class="footer1">
               <div class="container-body">
                   <div class="colum1">
                       <h1> Mas informacion de Reparaciones Express</h1>
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
                     <h2>Informacion de contacto</h1>
                   
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
  <script src="js/perfil.js"></script>
  <script src="js/js1.js"></script>
  <script src="js/loading.js"></script>
   <script src="./js/comentarios.js"></script>
</body>
</html>


<!-- logo para el perfil
<i class="fa-solid fa-circle-user"></i> -->