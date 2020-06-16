<?php
sleep(2);
session_start();
require "../funcoes/banco_bd/banco_bd.php";

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "samus355@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "uaihomeapp@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá Samuel, <br><br>Nova mensagem de contato<br><br><br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = 'jXR8laFUR_e5j-jf9Dx0gQ';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);


?>