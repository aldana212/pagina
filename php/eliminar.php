<?php
 include 'C:\xampp/htdocs/pagina/php/conexion1.php';

 //  proceso de eliminar tabla usuario

 if($_GET['id']){

 $ID=$_GET['id'];
 $sql ="DELETE FROM usuario where id_usuario='$ID'";
 $query =mysqli_query($conexion, $sql);
 header("location:/pagina/tabla_bd.php");

}

 //  proceso de eliminar tabla citas
 if($_GET['id_citas']){
 $id=$_GET['id_citas'];
 $sql1 =" DELETE FROM citas where id='$id'";
 $query1 =mysqli_query($conexion, $sql1);
 header("location:/pagina/tabla_agen.php");

}
 //  proceso de eliminar tabla citas

if($_GET['id_perfil1']){
 $id_perfil=$_GET['id_perfil1'];
 $sql2 ="DELETE FROM usuario where id_usuario='$id_perfil'";
 $query2 = mysqli_query($conexion, $sql2);
 if($query2){
    session_start();
    session_destroy();
    header("location:/pagina/home1.php");
 }  

 }
?>