<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparaciones Express</title>
    <link rel="stylesheet" href="css1/registro.css">
    <link rel="icon" type="image/jpg" href="img/logo_completa.jpg" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <a class="logo_nav" href="./home.html">
            <img src="img/logo_completo.jpg" alt="Imagen del logo de Reparaciones Express">
            <h2 class="nombre_empresa">Reparaciones Express</h2>
        </a>

        <nav>
            <a href="/pagina/home1.php" class="nav_link">Inicio</a>
            <a href="/pagina/administrador/login.php" class="nav_link">Inicio Sesion</a>
            <!-- <a href="./registro.html" class="nav_link">Registrar</a> -->
        </nav>

    </header>

    <br>

    <div class="header_registro">

    
        <!-- action= es la accion que va hacer el formulario al recibir los datos -->
    <!-- method=post= para decir que vamos a enviar los datos -->
    <form action="php/inicio_registro.php" class="register" id="register"  method="POST">

            <h2 class="titulo_crearCuenta">Crear una cuenta</h2>

            <img class="logo" src="img/logo_completo.jpg" alt="logo de Reparaciones Express">

         
            <input type="text" class="inputs" name="nombre" id="Nombre" placeholder="Ingrese su Nombre" required>
           
            <input type="text" class="inputs" name="apellido" id="Apellido" placeholder="Ingrese su Apellido" required>
           
            <input type="email" class="inputs" name="correo" id="Correo" placeholder="Ingrese Correo Electronico" required>
            
            <input type="tel" class="inputs" name="telefono" id="Telefono" placeholder="Ingrese Numero Telefono" required>
            
            <input type="password" class="inputs" name="contraseña" id="Contraseña" placeholder="Contraseña" required>
            
            <input type="password" class="inputs" name="confirme_contraseña" id="Contraseña" placeholder="Confirmar Contraseña" required>
            
            <div>
                <input type="checkbox" name="Terminos_condiciones" class="check" id="Terminos_condiciones" required><a class="vinculo" href="#">Aceptar terminos y condiciones</a>
            </div>
            <div class="container-button">
            <button class="button" type="submit" id="button">Registrar</button>
            
            <a href="./login.php" class="vinculo a">¿Ya tienes una cuenta?</a>

            </div>
    
         
        </form>

    </div>


    <footer class="footer">
        <ul>tel: 3150000000</ul>
        <ul>correo:reparacionEXP@gmail.com</ul>
        <ul>instagram: reparaciones_express12</ul>

    </footer>

    <script src="js/app.js"></script>
</body>

</html>