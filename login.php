<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pagina/css/login.css">
    <link rel="stylesheet" href="/pagina/css/loading.css">
    <title>Reparaciones Express</title>
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

<header>
        <a class="logo_nav" href="/pagina/home1.php">
            <img src="/pagina/img/logo_completo.jpg" alt="Imagen del logo de Reparaciones Express">
            <h2 class="nombre_empresa">Reparaciones Express</h2>
        </a>

        <nav>
        <a href="/pagina/home1.php" class="nav_link">Inicio</a>
            <a href="/pagina/registro.php" class="nav_link">Registrar</a>

        </nav>

    </header>


<main class="login-desing">
        <div class="container">
            <div class="titulo">Iniciar Sesion</div>
            <img class="logo" src="/pagina/img/logo_completo.jpg" alt="logo de Reparaciones Express">
            <form action="/pagina/php/inicio_login.php"  method="POST">
                <div class="user-details">
                <div class="inputcontainer">
                    <input type="email" class="input" name="correo" placeholder="a">
                    <label for="" class="label">Correo</label>
                     </div>
                     <div class="inputcontainer">
                    <input type="password" name="contraseña"  class="input" placeholder="a">
                    <label for="" class="label">Contraseña</label>
                     </div>
                </div>
                <div class="container-button">
                        <a href="/pagina/resta_contraseña.php" class="vinculo-a">Recuperar Contaseña </a>
                        <input type="submit" value="Iniciar Session" class="button">
                        <a href="/pagina/registro.php" class="vinculo-a">¿Necesitas una cuenta? </a>
                        <a href="/pagina/registro.php" class="vinculo">Registrate ahora !!! </a>
                </div>
                
            </form>
        </div>    
        <div class="waves1">
                <img src="/pagina/img/Autonomous car-pana.png" alt="">
             </div>
</main>

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
  <script src="js/loading.js"></script>
</body>

</html>

</body>
</html>





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pagina/css/login.css">
    <link rel="stylesheet" href="/pagina/css/loading.css">
    <title>Reparaciones Express</title>
    <link rel="icon" type="image/jpg" href="img/logo_completo.jpg" />
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

    <header>
        <a class="logo" href="home1.php">
            <img src="img/logo_completo.jpg" alt="Imagen del logo de Reparaciones Express">
            <h2 class="nombre_empresa">Reparaciones Express</h2>
        </a>

        <nav>
        <a href="/pagina/home1.php" class="nav_link">Inicio</a>
            <a href="/pagina/registro.php" class="nav_link">Registrar</a>
            </nav>

    </header>

    <br>

    <form action="/pagina/php/inicio_login.php" class="inicio_sesion" method="POST">

        <h1 class="titulo">Inicia Sesión</h1>
        <img src="img/logo_completo.jpg" class="imgLogo" alt="logo">


        <input type="text" name="correo" class="inputText" id="uno"  placeholder="CORREO">

        <input type="password" name="contraseña" class="inputText" id="dos" placeholder="CONTRASEÑA">

        <a href="recuperacion_cuenta.html" class="enlace">Recuperar Contaseña </a>

        <button type="submit" class="button">Iniciar Sesión</button>

        <a href="/pagina/registro.php" class="enlace">¿Necesitas una cuenta? </a>

        <a href="/pagina/registro.php" class="enlace">Registrate ahora !!! </a>
    </form> -->