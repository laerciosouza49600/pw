<?php

session_start();


?>

<form name = "dados" method = "POST" action = "formulario.php">

   nome: <input type = "text" name = 'usuario'> 
   <br>


   </br>
   senha: <input type = "text" name = 'senha'> <br>


   </br>

   <button type = "submit" name = 'verificar'> enviar </button> 
   <button type = "submit" name = 'apagar'> Limpar </button>
</form>




