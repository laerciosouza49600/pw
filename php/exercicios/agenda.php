<?php
	
	$file = fopen("agenda.txt",'a');
	$file1 = fopen("agenda.txt", 'r');
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
?>

<form name = "f" method="POST" action = "agenda.php">

	Nome: <input type = "text" name = "nome"> </br>
    Telefone: <input type = "text" name = "telefone"> </br>
    Email: <input type="text" name="email"> </br>
    <button type = "submit" name = "salvar"> salvar </button>
    <button type = "submit" name = "apagar"> apagar </button>

 </form>

 <?php

 	

 	echo "<table border = '1'align = 'center'>";
 	echo "<tr>";
 	echo "<th>Nome</th><th>Telefone</th><th>Email</th>";
 	echo "</tr>";

 	fwrite($file, "$nome | $telefone | $email | \n");

 	$texto = fread($file1,4096);
 	$dados = explode('|', $texto);
 	$cont = 0;
 	array_pop($dados);

 	foreach($dados as $d){

 		if($cont == 3){

 			echo("<tr>");

 			$cont = 0;
 		}

 		echo("<td>". "$d". "</td>");

 		$cont ++;
 	}


 ?>