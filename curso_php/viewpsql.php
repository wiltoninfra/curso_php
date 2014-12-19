<?php
require 'postgres.php';


$conecta = lista();

while ($row = pg_fetch_assoc($conecta)) {
   echo '<pre>';
    echo $row['id']. "|";
      echo $row['titulo']. "|";
  
   echo $row['conteudo'];
    
}
    


echo '<pre>';
print_r ($conecta);

