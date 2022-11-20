<?php session_start();

$mail = $_SESSION['email'];

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
 
//Configuracion servidor mail
$mail->From = "segurikerimanol@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='segurikerimanol@gmail.com'; //nombre usuario
$mail->Password = 'Seguridad2022'; //contraseña
 
//Agregar destinatario
$mail->AddAddress(".$mail.");
$mail->Subject = "sarbide kontrola";
$mail->Body = "Norbait zure erabiltzaileraekin sartzen saiatu da";
 
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo'<script type="text/javascript">
           alert("Enviado Correctamente");
           window.location = "../index.php";
        </script>';
}
