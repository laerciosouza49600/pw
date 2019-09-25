<?php

// echo " TP-EQUIV= 'refresh' CONTENT = '3' URL = ... arquivo >";

echo "<h1 align = 'center'> Exercícios - prato do dia </h1>";



$dia = Array("domingo", "segunda", "terca", "quarta","quinta","sexta", "sabado");

$cor = Array("orange", "blue", "red", "yellow", "green", "grey", "white");

$s = date('w');

// echo "hoje é ". $dia[$s]; teste

$prato = Array("Lasanha a quatro queijos", "Frango ao molho madeira", "Arroz à grega", "Feijoada à moda da casa",
"Nhoque paulista" , "Bacalhau ao forno" , "Feijão branco");

$valor = Array("R$ 12,60", "R$ 10,00", "R$ 09,40", "R$ 11,20" , "R$ 08,50", "R$ 15,20", "R$ 10,00");

?>

<html>

    <table border = '1' align = 'center', width = '50%'>

    <tr bgcolor = 'violet'>

    <td> Elemento </td>
    <td> Dia da semana </td>
    <td> prato do dia </td>
    <td> preço </td>

    </tr>

    <tr bgcolor = "
    <?php

    echo $cor[0];
    ?>
    
    ">
    

    <td> 0 </td>
    <td> Domingo </td>
    <td> Lasanha a quatro queijos </td>
    <td> R$ 12,60 </td>

    </tr>

    <tr bgcolor = "
    <?php
    echo $cor[1];
    ?>
    ">

    <td> 1 </td>
    <td> segunda </td>
    <td> Frango ao molho madeira </td>
    <td> R$ 10,00 </td>

    </tr>

    <tr bgcolor = "
    <?php
    echo $cor[2];
    ?>
    ">

    <td> 2  </td>
    <td> terça </td>
    <td> Arroz à grega </td>
    <td> R$ 09,40 </td>

    </tr>

    <tr bgcolor = "
    <?php
    echo $cor[3];
    ?>
    ">

    <td> 3 </td>
    <td> quarta </td>
    <td> Feijoada à moda da casa </td>
    <td> R$ 11,20 </td>

    </tr>

    <tr bgcolor = "
    <?php
    echo $cor[4];
    ?>
    ">

    <td> 4 </td>
    <td> quinta </td>
    <td> Nhoque paulista </td>
    <td> R$ 08,50 </td>

    </tr>

    <tr>

    <td> 5 </td>
    <td> sexta </td>
    <td> Bacalhau ao forno </td>
    <td> R$ 15,20 </td>
    
    </tr>

    <tr>

    <td> 6 </td>
    <td> sabádo </td>
    <td> Feijão branco </td>
    <td> R$ 10,00 </td>

    </tr>









