<?php   
   
   session_start();


?>

<form method = "POST" action = "formulario.php">


usuario: <h3> <input type = "text" name = "usuario" size = "30"> </h3> </br>
senha: <h3> <input type = "text" name = "senha" size = 30> </h3> </br>

<button type = "submit"> enviar </button>

<?php

   if(isset($_SESSION['usuario'])){

      ?>

   <a href = "login02.php"> ir para outra pagina </a>
   </br>

   <p> usuario <?php echo $_SESSION['usuario']; ?> > logado </p> 


   <?php

   }else{

      echo("usuario ou senha vazios.");
   }

   ?>

</form>