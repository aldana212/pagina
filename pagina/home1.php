<?php


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
    <link rel="stylesheet" href="css/home1.css">
    <title>Reparaciones Express</title>
    <link rel="icon" type="image/jpg" href="img/logo_favicon.jpg" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <a class="logo" href="#">
            <img src="img/logo_completo.jpg" alt="Imagen del logo de Reparaciones Express">
            <h2 class="nombre_empresa">Reparaciones Express</h2>
        </a>


        <nav>
            <a href="" class="nav_link">Nosotros</a>
            <a href="administrador/login.php" class="nav_link">Inicio Sesion</a>
            <a href="administrador/registro.php" class="nav_link">Registrar</a>
        </nav>

    </header>


    <hr>
    <div class="container">

        <section>

            <article class="contenido">

                <img class="Img_reparaciones_fachada" src="img/Reparaciones express.png" alt="Imagen de Reparaciones Express">

                <div class="text_reparaciones_express">

                    <h2 class="title">Reparaciones Express</h2>

                    <p class="info">Para Reparaciones Express es muy grato poner a su disposición y consideración nuestro taller de reparación de vehículos, nuestra experiencia y equipo de profesionales para el mantenimiento preventivo y correctivo de automóviles, camionetas
                        y camperos de todas las marcas.Tecnología de punta, equipos de alta precisión, con nuestra experiencia en reparación de automóviles y equipo de profesionales, estamos seguros de ofrecer soluciones oportunas y confiables a las necesidades
                        de mantenimiento y mecanica automotriz de su vehículo
                    </p>

                </div>
            </article>

            <article class="Como_lo_hacemos">

                <div class="text_reparaciones_express">

                    <h2 class="title">¿Como lo Hacemos?</h2>

                    <p class="info">Con nuestra gran experiencia en reparaciones Mecánicas, Eléctricas y Electrónicas, en nuestro Taller Mecánico Automotriz Reparaciones Express encuentras en un solo sitio todo lo que necesitas para tu carro. repuestos, baterías, llantas
                        Michelin, toda una amplia gama de referencias de aceites, lubricantes para un alto desempeño de tu carro. Todas la reparaciones que hacemos las anteceden un Diagnostico exhaustivo y prueba de ruta para determinar bien el origen
                        de la falla, la sigue una cotización con una explicación del origen de la reparación. Una vez autorizada la cotización procedemos a la reparación. Es la mejor forma de determinar realmente que necesita tu carro.</p>

                </div>

            </article>

        </section>
    </div>

    <section class="slider1">

        <article class="slider">

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

            <script src="./js/slider.js"></script>


        </article>

    </section>

    <div class="Servicios">

        <h2 class="title ">Nuestros servicios</h2>

        <ul class="servicios">
            <li>MANTENIMIENTO</li>
            <li>REPARACION</li>
            <li>MECANICA GENERAL</li>
            <li>LATONERIA Y PINTURA</li>
            <li>SISTEMA DE FRENOS</li>
            <li>TRANSMISION</li>
        </ul>

    </div>

    <footer class="footer">
        <ul>tel: 3150000000</ul>
        <ul>correo:reparacionEXP@gmail.com</ul>
        <ul>instagram: reparaciones_express12</ul>

    </footer>

</body>

</html>