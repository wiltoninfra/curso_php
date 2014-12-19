<?php

require 'utils.php';


$nome = $_POST["nome"];
$telefone = $_POST["tel"];
$email = $_POST["email"];
$mensagem = $_POST["msg"];
$redirect = "http://localhost/curso_php";

if (!$nome)  {
    return 'O Campo nome nao pode ser vazio';
    sleep(10);
    header("location:$redirect");
}
elseif (!$email) {
    echo 'O Campo email nao pode ser vazio';
    sleep(10);
    header("location:$redirect");
    
    
} else if (!$telefone) {
    echo 'O Campo telefone nao pode ser vazio';
    sleep(10);
    header("location:$redirect");
    
    
} elseif (!$mensagem) {
    echo 'O Campo mensagem nao pode ser vazio';
    header("location:$redirect");
    
}  else {
    inserirContato($nome, $email, $telefone, $mensagem);
    
    echo '<pre>';
    echo '<center>';
    echo 'Cadastro enviado com sucesso';
    sleep(10);
    header("location:$redirect");
    
    
}
?>
