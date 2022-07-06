<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/login.css">
    <title>Reparaciones Express</title>
    <link rel="icon" type="image/jpg" href="img/logo_completo.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <a class="logo" href="./home.html">
            <img src="img/logo_completo.jpg" alt="Imagen del logo de Reparaciones Express">
            <h2 class="nombre_empresa">Reparaciones Express</h2>
        </a>

        <nav>
        <a href="/pagina/home1.php" class="nav_link">Inicio</a>
            <!-- <a href="./iniciar_sesion.html" class="nav_link">Inicio Sesion</a> -->
            <a href="/pagina/administrador/registro.php" class="nav_link">Registrar</a>
            </nav>

    </header>

    <br>

    <!-- action= es la accion que va hacer el formulario al recibir los datos -->
    <!-- method=post= para decir que vamos a enviar los datos -->
    <form action="php/inicio_login.php" class="inicio_sesion" method="POST">

        <h1 class="titulo">Inicia Sesión</h1>
        <img src="img/logo_completo.jpg" class="imgLogo" alt="logo">


        <input type="text" name="correo" class="inputText" id="uno"  placeholder="CORREO">

        <input type="password" name="contraseña" class="inputText" id="dos" placeholder="CONTRASEÑA">

        <a href="recuperacion_cuenta.html" class="enlace">Recuperar Contaseña </a>

        <button type="submit" class="button">Iniciar Sesión</button>

        <a href="/pagina/administrador/registro.php" class="enlace">¿Necesitas una cuenta? </a>

        <a href="/pagina/administrador/registro.php" class="enlace">Registrate ahora !!! </a>
    </form>


    <footer class="footer">
        <ul>tel: 3150000000</ul>
        <ul>correo:reparacionEXP@gmail.com</ul>
        <ul>instagram: reparaciones_express12</ul>
    </footer>

</body>

</html>