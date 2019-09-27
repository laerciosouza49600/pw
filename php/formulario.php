<?php

session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['senha'] = $_POST["senha"];


/*echo("oi"." ".$_SESSION['usuario']);
echo("</br>");
echo("senha é = ".$_SESSION['senha']);
*/
	
	if($_SESSION['usuario'] == 'laercio' && $_SESSION['senha'] == '12345'){

		/*echo("</br>");

		echo("logado!");

		*/

		?>

		<a href = "login02.php"> Verificação valida! </a>

		</br>

		<?php

		echo("logado com sucesso");

		?>
		
	<?php
	}else{

		echo("</br>");


		header("Location:login.php");

	}



?>