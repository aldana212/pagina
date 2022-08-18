<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'C:\xampp/htdocs/pagina/Mailer/src/PHPMailer.php';
require 'C:\xampp/htdocs/pagina/Mailer/src/SMTP.php';
require 'C:\xampp/htdocs/pagina/Mailer/src/Exception.php';

session_start();
include 'C:\xampp/htdocs/pagina/php/conexion1.php';

    $bytes = random_bytes(5);
    $token = bin2hex($bytes);
    $correo=$_POST['correo'];
    $codigo =rand(1000,9999);
    $url ='localhost/pagina/codigo_correo.php';

  $validar_correo = mysqli_query ($conexion, "SELECT * FROM usuario WHERE correo='$correo'");
 
  $rol = mysqli_fetch_array($validar_correo);
    
  if($rol){
    
     $mail = new PHPMailer(true);
    
       try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->SMTPDebug = 0;                      //Habilitar salida de depuración detallada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Configurar el servidor SMTP para enviar a través
        $mail->SMTPAuth   = true;                                   //Habilitar autenticación SMTP
        $mail->Username   = 'danielaldana212@gmail.com';                     //nombre de usuario SMTP
        $mail->Password   = 'npqvekyzzpfgtyvy';                               //Contraseña SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar el cifrado TLS implícito
        $mail->Port       = 465;                                    //Puerto TCP para conectarse; use 587 si configuró `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        // Destinatarias
        $mail->setFrom($correo);
        $mail->addAddress($correo);     //Agregar una destinataria
        $mail->addReplyTo($correo);
    
       //Archivos adjuntos
        //$mail->addAttachment('/var/tmp/file.tar.gz');        //Agregar archivos adjuntos
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Nombre opcional
    
       // Contenido
        $mail->isHTML(true);                                  // Establecer el formato de correo electrónico en HTML
        $mail->Subject = 'Reparaciones Express';
        $mail->MsgHTML("<html>
                       <body>
                       <h1 aling=center>restablecer contraseña</h1>
                       <h1>$codigo</h1>
                       <a href=".$url.'?correo='.$correo.'&token='.$token.">Validar cuenta</a>
                       </body> 
                       </html>");
        $mail->send();
             
        $query = mysqli_query ($conexion, "INSERT INTO recu_contraseña(correo, token, codigo) VALUE ('$correo','$token','$codigo')");
        header ("location: pagina/login.php");
        // echo 'enviado y insertado';

    } catch (Exception $e) {
        echo 'Mailer Error ' . $mail->ErrorInfo;
    }

   }else{
   echo '
    <script>
     alert("tu correo no ah sido registrado");    
     window.location ="registro.php";
     </script> 
     ';  
 }



// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;


// require 'Mailer/src/PHPMailer.php';
// require 'Mailer/src/SMTP.php';
// require 'Mailer/src/Exception.php';

// $nombre=$_POST['nombre'];
// $apellido=$_POST['apellido'];
// $correo=$_POST['correo'];
// $telefono=$_POST['telefono'];
// $contraseña=$_POST['contraseña'];
// $confirme_contraseña= $_POST['confirme_contraseña'];
// $cargo= $_POST['cargo'];



//  $mail = new PHPMailer(true);

//    try {
//     //Server settings
//     //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//     $mail->SMTPDebug = 0;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'danielaldana212@gmail.com';                     //SMTP username
//     $mail->Password   = 'nugwrvmznpykwnme';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    // $mail->setFrom($correo);
    // $mail->addAddress($correo);     //Add a recipient 
    // $mail->addReplyTo($correo);

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    // $mail->isHTML(true);                                  //Set email format to HTML
    // $mail->Subject = 'enviado por '.$_POST['nombre'];
    // $mail->Body    = '<h1 aling=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['correo'].'</h1>';
    // $mail->AltBody    = 'correo de prueba con PHPMailer desde tu cuenta de gmail!</b>';
    // $mail->send();

     
    //  header("location: login.php");

    // echo 'enviado';
// } catch (Exception $e) {
//     echo 'Mailer Error' . $mail->ErrorInfo;
// }

?>