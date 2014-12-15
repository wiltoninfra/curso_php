<?php 

$texto = file_get_contents('sobre.txt');
$filtra = str_word_count(("$texto", 250);
print_r(str_word_count($texto, 250));
echo $filtra;
    
    
    ?>