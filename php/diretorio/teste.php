<form action = "teste.php" method = "POST">

	<h2> escolha a operação </h2>

	<input type = "radio" name = "calculadora" value = "soma"> soma
	<input type = "radio" name = "calculadora" value = "sub" > subtracao
	<input type = "radio" name = "calculadora" value = "produto"> multiplicacao
	<input type = "radio" name = "calculadora" value = "divisao"> divisao
	<input type = "submit">
</form>


<?php
	
	$a = 4;
	$b = 5;
	$c;

	
	if($_POST['calculadora'] == "soma"){

		$c = $a+$b;

		echo "soma == ". $c;

	}

?>