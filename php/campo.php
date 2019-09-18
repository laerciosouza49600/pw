<?php

$mensal = $_POST['nota1'];
$bimestral = $_POST['nota2'];
$media = ($mensal + $bimestral) / 2;

echo ("<h1>  media = " .$media). "</h1>";


?>