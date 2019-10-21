<form action = "teste.php" method = "POST">

	<h2> escolha a operação </h2>

	<input type = "radio" name = "calculadora" value = "soma"> soma
	<input type = "radio" name = "calculadora" value = "sub" > subtracao
	<input type = "radio" name = "calculadora" value = "produto"> multiplicacao
	<input type = "radio" name = "calculadora" value = "divisao"> divisao </br>
	<input type = "number" name = "a"> </br>
	<input type = "number" name = "b"> </br>
	<button type = "submit"> calculo </button>
</form>

<?php
	
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c;

	
	if($_POST['calculadora'] == "soma"){

		$c = $a+$b;

		echo "soma == ". $c;

	}else if($_POST['calculadora'] == "sub"){

		$c = $a-$b;

		echo "subtração == ".$c;

	}else if($_POST['calculadora'] == "produto"){

		$c = $a*$b;

		echo "<h3>multiplicação == ". $c. "</h3>";

	}else if($_POST['calculadora'] == "divisao"){

		$c = $a/$b;

		echo "divisão == ". $c;
	}else{

		echo " <h1 align = 'center'> nenhum item selecionado". "</h1>";
	}

	

?>