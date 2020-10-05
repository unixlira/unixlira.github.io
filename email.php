<?php

require 'src/mail.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

if(sendLira($nome,$email,$assunto,$mensagem) && sendMail($nome,$email)){
    header("location: http://lira.digplay.tech?send=true");
}else{
    header("location: http://lira.digplay.tech?send=false");
}

