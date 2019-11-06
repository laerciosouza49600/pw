<?php   
   
   session_start();

   $_SESSION['usuario'] = $_POST['n'];
   $_SESSION['senha'] = $_POST["senha"];

   if()
    
?>

<form method = "POST">


usuario: <h3> <input type = "text" name = "n" size = "30"> </h3> </br>
senha: <h3> <input type = "text" name = "senha" size = 30> </h3> </br>

<button type = "submit"> enviar


</form>
