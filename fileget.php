<?php 

$texto = file_get_contents('sobre.txt');

$frases = str_word_count($texto, 1);


while (str_word_count($frases)=='100'); 
    foreach ($frases as $frases) {
        echo " $frases";
    }
        
    








    
    
    ?>
