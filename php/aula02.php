<?php

    echo " <h2 align = 'center' > primeira pagina </h2>";


    $n1 = 1.5;
    $n2 = 2;
    $n3 = 'a';
    $n4 = -3;
    $n5 = "ifpi";


        // " reconhece como variavel

    echo "</br> <h2 align = 'center'>  O valor é $n2 </h2>";

    echo '</br> O valor é ' .$n5;

      // . é concatenação
      // em js usa-se +


      //if! , esse comando nega uma afirmação

      // || esse continua sendo o ou

    if(($n2 == 2) & ($n2 >= 2)){

        echo "<font color = 'blue' >";
        echo "<br/> verdadeiro";
        echo "</font>";

    }else{
        echo "<font color = 'red>";
        echo "<br/> Falso";
        echo "</font>";
    }

    if($n2 == 2){
        echo "<br/> ok";
    }else if($n2 > 2){

        echo "ok2";
    }else if($n2 > 10){

        echo "ok3";
    }else{
        echo "ok4";
    }


    echo "<hr>";
    echo date('d-m-Y');

  /*  d = dia
      m = mes
      Y = ano

    */

    //precisa do xampp

    // digite localhost/pastaquecriou




    ?>
