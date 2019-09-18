<?php

$btn = @$_POST['btn'];

if($btn == 'btn1'){

    soma();
}

function soma(){

    $n = @$_POST['n'];

    $a = $n + 5;

    echo ("valor = ".$a);
}


?>


