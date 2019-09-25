<?php

    echo "<h1 align = 'center' > Aula 09 - PHB  </h1>";

    echo "<hr>";

    $cor = rand(0,2);

    $s = date('w');

    $semana = Array("dom", "seg", "ter", "quar","quint");

    echo("hoje é ".$s);

   // echo($semana[4]);

?>

<html>


<table border = '1' align = "center" width = "40%">

<tr>

    <td bgcolor = " 
    <?php
    echo $cor == 1? 'blue':'white';?>
    "> Dados a </td>
    <td bgcolor = "
    <?php echo $cor == 0? 'red': 'white'; ?>
    "> Dados a </td>

    
     

</tr>
</table>

</html>
