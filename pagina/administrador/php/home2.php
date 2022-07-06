<?php
    session_start(); // Iniciamos la sesión.
    if(!isset($_SESSION['usuario'])){ // Si no existe la variable de sesión, redireccionamos al index.php.
        echo '
            <script>
                alert("Por favor, debes iniciar sesion para acceder a esta página");
                window.location = " /pagina/home1.php";
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
    <title>menu</title>
    <link rel="stylesheet" href="css2/home2.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">


  <header> 
        <div class="contenedor">
       <i class="fa-solid fa-align-justify" id="boton"></i>
      </div>   


      <h1>reparation express</h1>

      
      <div class="contenedor1">
        <i class="fa-solid fa-circle-user"></i>
        <a href="cerrar_sesion.php">cerra sesion</a>   
      </div>
  </header>

    <aside class="menu__side"  id="menu_side">
        <div class="name_pagina">
            <i class="fa-solid fa-warehouse"></i>
            <h4>Home</h4>
        </div>


        <div class="options__menu"> 

        <!-- <a href="clientes.php">
            <div class="option">
                <i class="fa-regular fa-calendar-days"></i>
                <h4>administrador</h4>
            </div>
        </a> -->



        <!-- <a href="perfil.php">
            <div class="option">
                <i class="fa-regular fa-calendar-days"></i>
                <h4>perfil</h4>
            </div>
        </a> -->
        
        <a href="">
            <div class="option">
                <i class="fa-regular fa-calendar-days"></i>
                <h4>agendamiento</h4>
            </div>
        </a>
        <a href="" >
            <div class="option">
                <i class="fa-solid fa-trailer"></i>
                <h4>recogimiento</h4>
            </div>
         </a>


         <a href="">
            <div class="option">
                <i class="fa-solid fa-comment-dots"></i>
            <h4>chat</h4>
            </div>
         </a>



         <a href="">
             <div class="option">
                <i class="fa-solid fa-car-burst"></i>
                <h4>observacion de vehiculo</h4>
             </div>
         </a>



         <a href=""> 
             <div class="option"> 
             <i class="fa-solid fa-sack-dollar"></i>                
             <h4>forma de pago</h4>
             </div>
         </a>
        </div>
  </aside>
   
  
    <section class="contenido">
        <div class="titulo">
        <h1>servicio</h1>
        </div>

       <hr>
    
        <article>
            <div class="informacion">
            <a href="#"><h1>mantenimiento</h1></a>
            <img src="img/mantenimiento.jpg" alt="matenimiento">
            <p>Una de las mejores maneras de garantizar que tu auto tenga una excelente vida útil es llevando a cabo los controles de mantenimiento correctivo y preventivo. Aunque algunas reparaciones a veces son inevitables, las revisiones de mantenimiento pueden ayudarte a evitar reparaciones costosas en el futuro ahorrándote dinero, manteniendo a tus pasajeros seguros y a tu vehículo en buenas condiciones.
                <br>
                <br>
                Mantenimiento correctivo:
                <br>
                aquel en el que se reparan las diferentes partes del vehículo en el momento en que dejan de funcionar o empiezan a fallar.
                Mantenimiento preventivo:
                <br>
                El mantenimiento preventivo se refiere al mantenimiento regular y de rutina para ayudar a mantener tu vehículo en funcionamiento, evitando cualquier tiempo de inactividad y gastos por fallas imprevistas del equipo.

            </p>
                  <!-- <a href="">ver mas</a> -->
          </div>

           <hr>

            <div class="informacion1">
            <a href="#"><h1>reparacion</h1></a>
            <img src="img/repacion.jpg" alt="matenimiento">
            <p>La reparación muchas veces no suele esperar, es un servicio que puede requerirse con mucha urgencia y en Autoservicio Mitsubishi estamos preparados para ser de gran ayuda en esos momentos.
                <br>
                <br>
                Es un servicio muy común, de alta demanda, porque así como nuestros vehículos cuentan con diferentes partes, elementos y sistemas para funcionar correctamente, éstos suelen averiarse por el uso diario. En nuestro taller automotriz realizamos las reparaciones con piezas originales y con garantía justa.
            </p>
               <!-- <a href="">ver mas</a> -->
           </div>

           <hr>

           <div class="informacion">
            <a href="#"><h1>mecanica general</h1></a>
            <img src="img/mecanica.jpg" alt="matenimiento">
            <p>En el taller mecánico automotriz, tenemos como objetivo reparar y realizar el mantenimiento periódico del vehículo, con el fin de conocer el funcionamiento por ejemplo de la combustión del motor, el cual es parte fundamental de éste.
                <br>
                <br>
                Además, se familiariza con cada una de las partes del vehículo, para así desmontarlas y ensamblarlas para su reparación.
            </p>
              <!-- <a href="">ver mas</a> -->
           </div>

           <hr>

           <div class="informacion1">
            <a href="#"><h1>latoreria y pinturas</h1></a>
            <img src="img/pintura.jpg" alt="matenimiento">
            <p>Son dos procesos que permiten reparar y embellecer el vehículo, los cuales deben iniciar con el lavado de éste, luego el automotor pasa a una zona de desarme de las partes afectadas que requieran reparación o que ameriten un cambio definitivo.
                <br>
                <br>
                Además se retiran las partes que dificultan el proceso de limpieza uniforme (boceles, logotipos y empaques) y se cubren vidrios, espejos retrovisores, manijas y cilindros de puertas para evitar imperfecciones.
                <br>
                <br>
                Lo primero que se realiza es el lavado del vehículo, en donde se procede a la aplicación de los fondos, que son la base de la pintura.  
            </p>
            <!-- <a href="">ver mas</a> -->
           </div>

             <hr>

           <div class="informacion">
              <a href="#"><h1>sistema de frenos</h1></a>
               <img src="img/frenos.jpg" alt="matenimiento">
               <p>La reparación muchas veces no suele esperar, es un servicio que puede requerirse con mucha urgencia y en Autoservicio Mitsubishi estamos preparados para ser de gran ayuda en esos momentos.
                <br>
                <br>
                Es un servicio muy común, de alta demanda, porque así como nuestros vehículos cuentan con diferentes partes, elementos y sistemas para funcionar correctamente, éstos suelen averiarse por el uso diario. En nuestro taller automotriz realizamos las reparaciones con piezas originales y con garantía justa.
            </p>
                <!-- <a href="">ver mas</a> -->
          </div>

           <hr>

          <div class="informacion1">
            <a href="#"><h1>transmision</h1></a>
             <img src="img/transmision.jpg" alt="matenimiento">
             <p>La reparación muchas veces no suele esperar, es un servicio que puede requerirse con mucha urgencia y en Autoservicio Mitsubishi estamos preparados para ser de gran ayuda en esos momentos.
                <br>
                <br>
                Es un servicio muy común, de alta demanda, porque así como nuestros vehículos cuentan con diferentes partes, elementos y sistemas para funcionar correctamente, éstos suelen averiarse por el uso diario. En nuestro taller automotriz realizamos las reparaciones con piezas originales y con garantía justa.
            </p>
              <!-- <a href="">ver mas</a> -->
        </div>

        </article>
    </section>
    <script src="js/js1.js"> </script>
</body>
</html>


<!-- logo para el perfil
<i class="fa-solid fa-circle-user"></i> -->