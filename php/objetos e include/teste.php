<?php

    echo "<h2> Arquivos em PHP </h2>";

//a abre e apaga, w apaga abre e escreve no final, r apenas lê
//write escrever
//fopen cria o arquivo

$file = fopen("arquivo.txt", 'a');
$file1 = fopen("arquivo.txt", 'r');

// fwrite($file, "ifpi 2019 <br/> \n");
fwrite($file, "nome | email | ano </br> \n");

$texto = fread($file1,4096);
$dados = explode('|', $texto);

//echo $texto;
//$c = 0;
    foreach($dados as $d){
   /* if($c == 3){
        echo ("<br>");
        $c++;
    } */
    echo $d; 
}
// cria um vetor
//não pode abrir com w! << fread

//filesise($file1)

?>