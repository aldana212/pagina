<?php

// // xampp  Usuario: root(user)@localhost(host) 
// $host="localhost";
// $user="root";
// // no se pone contraseña
// $password="";
// // nombre de la tabla en xampp
// $bd="reparacion";


//traemos todos los datos de la base de datos para establacer la conexion 
// mysqli_connect= es para conectar una conexion a mysql
$conexion = mysqli_connect("localhost","root","","reparacion" );


// hacemos la verificacion para ver si esta conectada
// if($conexion){

//     echo 'conectado';
// }else{
//     echo 'error';
// };

?>