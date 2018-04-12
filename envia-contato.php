<?php


$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$conteudoEmail =  "Contato de:" .$nome."<br/> Email:".$email."<br/>Mensagem:".$mensagem;


date_default_timezone_set('America/Sao_Paulo');
require "PHPMailerAutoload.php";

//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->SMTPDebug = 0;                                 // Enable verbose debug output
$mail->isSMTP();        
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "gusviaja@gmail.com";
$mail->Password = "rafa6038";

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

$mail->setFrom("gusviaja@gmail.com", "Formulario de contato de site Ni Sistemas");
$mail->addAddress("gusviaja@gmail.com");
$mail->Subject = "Email de form de contato da Ni Sistemas";
$mail->Body = $conteudoEmail;
//Replace the plain text body with one created manually
$mail->AltBody = 'Contato de {$nome}\nEmail:{$email}\nMensagem:{$mensagem}';

//send the message, check for errors
if (!$mail->send()) {
    header("location:index.php?enviado=false");
} else {
    header("location:index.php?enviado=true");
}
?>