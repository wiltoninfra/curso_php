<?php

function conexao() {
    $conexao = mysql_connect("localhost","root","123456");
    if (!$conexao) {
        die('Sem conexao com banco de dados');
   } else  { 
       mysql_select_db("curso");
   }
}

function listar($tabela) {
    conexao();
    $result = mysql_query("SELECT * FROM $tabela ORDER BY id limit 1");
    
    return $result;
}


function inserir($titulo, $conteudo) {
    conexao();
    $query = "insert into posts (titulo, conteudo) values ('$titulo', '$conteudo')";
    mysql_query($query);
    return "cadastrado com sucesso";
        
}

?>


