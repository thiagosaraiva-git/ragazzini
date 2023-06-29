<?php
$name = $_POST['name'];
$email = $_POST['mail'];
$mensagem = $_POST['msg'];

$to = "saraii_@live.com";
$email_assunto = "Novo contato! (Rodrigo Website)";
$email_mensagem = "Nome:  $name \nEmail: $email \nMensagem: $mensagem";

mail($to, $email_assunto, $email_mensagem);

exit;
?>
