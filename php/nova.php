<?php

$mensal = $_POST['mensal']; 
$bimestral = $_POST['bimestral'];

$media = ($mensal + $bimestral) / 2;

echo "sua nota é " .$media;


$numero = $_POST['numero'];

for($i = 0; $i < $numero; $i++){

    if($numero % $i = 0){

        echo ($i);
    }
}

?>