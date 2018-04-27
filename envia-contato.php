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
$mail->Host = 'mx1.hostinger.com.br';
$mail->Port = 587;
$mail->SMTPSecure = '';
$mail->SMTPAuth = true;
$mail->Username = "gustavo@nisistemas.com.br";
$mail->Password = "alfa8888";

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

$mail->setFrom("gustavo@nisistemas.com.br", "Formulario de contato de site Ni Sistemas");
$mail->addAddress("gustavo@nisistemas.com.br");
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