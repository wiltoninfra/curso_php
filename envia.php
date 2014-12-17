<?php

foreach ($_POST as $dados) {
    if ($dados === false) {
        echo '<br/>';
        echo $dados;
        echo '<br/>';
    }  else {
       echo "nada <br>";
    } 
       
       
         
}
/*

function valida ($nome) { 
    if (empty($nome['email'])) {
    
        echo '<div class="alert alert-error">';
        echo'campo email nao pode ser vazio';
        echo ' </div>';
        } 
        
        elseif ($nome['nome'] == false) { 
    
         echo 'o nome nao pode ser vazio';
            echo '<br/>';

            } 

            elseif($nome['telefone'] == false) 
             {
                 echo 'Telefone nao pode ser vazio';
                 echo '<br/>';
             }
             
             elseif($nome['celular'] == false)
             {
                 echo 'Celular nao pode ser vazio';
                 echo '<br/>';
             }
             
             elseif($nome['endereco'] == false)
             {
                 echo 'Endereco nao pode ser vazio';
                 echo '<br/>';
             }
             
             elseif($nome['estado'] == false)
             {
                 echo 'Estado nao pode ser vazio';
                 echo '<br/>';
             } else {
                 echo 'dados enviado com sucesso';
             }
             
}

session_destroy();

/*


foreach ($_POST as $dados) {
    if ($dados == false) {
        echo '<br/>';
        echo $dados;
        echo '<br/>';
    } else {
        echo $dados   ;
        echo '<br/>';
    }
}


   
*/

  /*          
if(empty($nome)) {
    echo 'campos nao podem ser vazios';
} else {
    echo 'enviado com sucesso';
}*/