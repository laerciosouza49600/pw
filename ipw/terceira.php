<?php

    echo("aula 03 php");

    $a = "IFPI";
    $b = "2019";

    echo "<br/>".$a." ". $b. "<br/>";

 //   $c = strlen($a);
    
    $d = trim($a);

// trim tira o espaço do inicio e do final

//strlen quantos caracteres

    $c = strlen($d);

    echo $c;

    $nome = "meu nome";

// strtoupper deixa tudo em maiúsculo
// strtolower deixa tudo em minúsculo

    $n = strtolower($nome);

    $n = strtoupper($nome);

    echo ("</br>");

    echo $n;

    $pais = "brasil";

    // 3 posição 2 caracteres

    // substr imprime a partir da terceira posição, e 2 é a quantidade de caracteres pra imprimir

    $l = substr($pais,3,2);

    echo "<br/>" .$l;

    // time conta os segundos
    // usado para contador de tempos
    
    $time = time();

    echo $time;

    $time2 = time() + 10;

    echo "</br>" .$time2;

    echo "</br>";

   // $hora = date('h:i:s' , strtotime('+5 hour', strtotime($hora)));

    // hora atual


    echo date('h:i:s');

    


?>