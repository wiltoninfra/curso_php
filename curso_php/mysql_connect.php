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
    $result = mysql_query("SELECT * FROM $tabela ORDER BY id");
    
    return $result;
}

function view1($tabela) {
    conexao();
    $result = mysql_query("SELECT * FROM $tablela ORDER BY id limit 1");
   return  $result;
}

function editar($id, $titulo, $comentarios) {
    conexao();
    query("UPDATE posts SET titulo, comentarios = '$titulo', '$comentarios' where id = $id");
    
    return  $result;
}




function inserir($titulo, $conteudo, $id) {
    conexao();
    $query = "insert into posts (titulo, conteudo) values ('$titulo', '$conteudo')";
    $result = mysql_query($query);
    return $result;
        
}



function getless($editar, $deletar) {
    if (!$editar) {
        
    }
    
    
}



?>


