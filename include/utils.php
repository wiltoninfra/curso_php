<?php
function conexao () {
$conexao = pg_connect("host=localhost port=5432 dbname=dexter user=postgres password=123456");
    if (!$conexao) {
        die ('Nao foi possivel conetar');
    }
}

function inserirContato($nome, $email, $telefone, $mensagem) {
    conexao();
    $query = "INSERT INTO contatos (nome, email, telefone, mensagem) values ('$nome','$email','$telefone','$mensagem')";
    $query = pg_query($query);
    return $query; 
    
}

function validaCampo($nome, $email, $telefone, $mensagem) {
    if (!$nome) {
        return 'nome nao pode ser vazio';
    } else {
        echo 'inserido com sucesso';
    }
    
}

?>















