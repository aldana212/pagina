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
  <link rel="stylesheet" href="/pagina/css/home_admi.css">
  <link rel="stylesheet" href="/pagina/css/loading.css">
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

    <h1 id="h1">Reparation Express</h1>

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
              <a href="/pagina/tabla_bd.php">
                <div class="option">
                <i class="bi bi-table"></i>
                    <h4>base de datos</h4>
                </div>
              </a>
              <a href="/pagina/tabla_agen.php" >
                  <div class="option">
                  <i class="bi bi-calendar-plus-fill"></i>
                      <h4>bd agendamiento</h4>
                    </div>
              </a>
                  
          </div>
     </div>
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="graficas">
       <canvas id="myChart"></canvas>
    </div>
    <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['administrador','usuario','empleado'],
            datasets: [{
                label: '# administrador, usuario,  empleado',
                data: 
                  <?php
                    $sql = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_cargo=1");
                    $sql1 = mysqli_query($conexion, "SELECT * FROM usuario WHERE  id_cargo=2");
                    $sql2 = mysqli_query($conexion, "SELECT * FROM usuario WHERE  id_cargo=3");
                    ?>
                  [<?php echo $sql->num_rows?>, <?php echo $sql1->num_rows?>, <?php echo $sql2->num_rows?>]

                ,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <script src="/pagina/js/js1.js"></script>
    <script src="/pagina/js/loading.js"></script>

</body>
</html>