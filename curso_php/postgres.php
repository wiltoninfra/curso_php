<?php

function conexao() {
$conexao = pg_connect("host=localhost port=5432
    dbname=curso user=postgres password=123456");
if (!$conexao) {
    die('Sem conexao com banco de dados');
    
    } else {
        echo '';
    }
}


function lista() {
    conexao();
    $query = "SELECT * FROM posts";
    $query = pg_query($query);
    return $query;    
    
}



<?php if ($nome or $telefone or $email or $mensagem == false) {
    echo 'formulario com campos vazios';
} else {
    inserirContato($nome, $email, $telefone, $mensagem);
    echo 'enviado com sucesso';

                    } ?>
                          