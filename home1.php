<?php
 include 'C:\xampp/htdocs/pagina/php/conexion1.php';
 session_start(); // Iniciamos la sesión.
 if(isset($_SESSION['usuario'])){ // Si existe la variable de sesión, redireccionamos al home2.php.
    header("location: /pagina/administrador/php/home2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pagina/css/home1.css">
    <link rel="stylesheet" href="/pagina/css/loading.css">
    <title>Reparaciones Express</title>
    <link rel="icon" type="image/jpg" href="img/logo_favicon.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="/pagina/cssboostrad/bootstrap.min.css"> -->

</head>

<body>

    <div>
        <div id="contenedor_carga">
            <div id="cargar"></div>
            <p class="message">Cargando...</p>
        </div>
    </div>

    <header id="header">
        <div class="container__header">
            <div class="logo">
                <img class="Logo" src="img/logo_completo.jpg" alt="Reparaciones Express">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="/pagina/nosotros.php" class="select">Nosotros</a></li>
                        <li><a href="/pagina/login.php" class="select">Inicio Sesion</a></li>
                        <li><a href="/pagina/registro.php" class="select">Registrate</a></li>
                        <li><a href="#icono1" class="select">Contacto</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="bi bi-justify"></i></div>
            </div>
        </div>
    </header>

    <div class="container__all" id="container_all">

        <div class="cover">

            <div class="container__cover">

                <div class="container__info">
                    <h1>Reparaciones</h1>
                    <h2>Express</h2>
                    <p>Para Reparaciones Express es muy grato poner a su disposición y consideración nuestro taller de reparación de vehículos, nuestra experiencia y equipo de profesionales para el mantenimiento preventivo y correctivo de automóviles, camionetas
                        y camperos de todas las marcas. Tecnología de punta, equipos de alta precisión, con nuestra experiencia en reparación de automóviles y equipo de profesionales, estamos seguros de ofrecer soluciones oportunas y confiables a las necesidades
                        de mantenimiento y mecanica automotriz de su vehículo</p>
                </div>
                <div class="container__vector">
                    <img class="img_reparacion" src="img/Reparaciones express.png" alt="">
                </div>
            </div>
        </div>

        <article class="Como_lo_hacemos">
            <div class="text_reparaciones_express">
    
                <h2 class="Como-hacemos">¿Como lo Hacemos?</h2>
    
                <p class="Como_hacemos">Con nuestra gran experiencia en reparaciones Mecánicas, Eléctricas y Electrónicas, en nuestro Taller Mecánico Automotriz Reparaciones Express encuentras en un solo sitio todo lo que necesitas para tu carro. repuestos, baterías, llantas
                    Michelin, toda una amplia gama de referencias de aceites, lubricantes para un alto desempeño de tu carro. Todas la reparaciones que hacemos las anteceden un Diagnostico exhaustivo y prueba de ruta para determinar bien el origen
                    de la falla, la sigue una cotización con una explicación del origen de la reparación. Una vez autorizada la cotización procedemos a la reparación. Es la mejor forma de determinar realmente que necesita tu carro.
                </p>
            </div>
        </article>  
        
        <section class="conte">
            <h2 class="titulo productos">Nuestros Productos</h2>
                <div class="contenedor-sobre-nosotros">
                    <div class="contenido-textos">
                        <img src="./img/pintura.jpg" alt="" class="imagen-about-us">
                            <h3><span>1</span>Pintura</h3>
                            <p>Repraciones Express cuenta con la mejor calidad de pintura para satisfacer a nuestros clientes y cumplir con sus necesidades.</p>
                    </div>

                    <div class="contenido-textos">
                        <img src="./img/frenos.jpg" alt="" class="imagen-about-us">
                            <h3><span>2</span>Accesorios</h3>
                            <p>Tambien cuenta con los mejores productos como discos, pastillas, pernos, entre otros. para hacer lucir tu carro como nuevo.</p>
                    </div>   
                </div>
        </section>


        <section class="about-services">

            <h2 class="titulo"> Nuestos Servicios</h2>
    
            <div class="carrusel">
                <div class="carrusel-items">
                    <div class="carrusel-item">
                        <img src="img/1.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/2.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/3.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/4.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/5.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/6.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/1.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/2.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/3.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/4.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/5.jpg" alt="" />
                    </div>
                    <div class="carrusel-item">
                        <img src="img/6.jpg" alt="" />
                    </div>
                </div>
            </div> 
    
            <div class="Servicio">
                <li class="servicio">Mecánica en general</li>
                <li class="servicio">Cambio de Aceite</li>
                <li class="servicio">Carrocería y pintura</li>
                <li class="servicio aire">Aire acondicionado y calefacción</li>
            </div>
        </section>
        <h2 class="titulo productos"> Que dicen nuestros clientes</h2> 
        <section class="contenedor">  
        <h2 class="titulo1 productos">Reseñas</h2> 
            <?php

$consulta = mysqli_query($conexion, "SELECT * FROM comentarios");
while($data = mysqli_fetch_array($consulta)){

?> 
            <div class="cards">
                <div class="card">
                    <img src="/pagina/img/user.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h3><?php echo $data['correo'];?></h3>
                    <p> <?php echo $data['comentario'];?></p>
                    
                    </div>
                </div>
            </div>
            <?php
}
?>
     
            <!-- formulario -->
        </section>
        <section>
        <div class="bnt">
                <button type="button" class="bnt1" id="abrir">Quieres dejar un Comentario</button>
            </div>
            
            <form action="/pagina/php/comentario.php" class="form" id="boton_form" method="POST">
               <div class="container-data">
                   <div class="photo-input">
                      <div id="cerrar"><i class="bi bi-x"></i></div>
                            <input type="text" placeholder="Ingresa tu correo" name="correo">
                      </div>
                      <textarea name="comentario" class="mensaje" id="" cols="30" rows="10" placeholder="Escribe tu mensaje "></textarea>
                     <button class="bnt-coment">Comentar</button>
                </div> 
         </form>
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
                               <label>Carrera 14 #45 </label>
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

    <script src="/pagina/boostrap/bootstrap.min.js"></script>
  <script src="/pagina/js/slider.js"></script>
  <script src="/pagina/js/loading.js"></script>
  <script src="js/js2.js"></script>
  <script src="js/comentarios.js"></script>

</body>
</html>