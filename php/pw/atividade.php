<?php
	
	$file = fopen("agenda.txt" , 'a');
	$file1 = fopen("agenda.txt", 'r');

	fwrite($file, "nome | telefone | email | \n");

	$texto = fread($file1, 4096);
	$dados = explode('|', $texto);

	$o = 0;

	array_pop($dados);

	echo("<table border = '1' align = 'center'>");

		echo("<tr>");

		echo("<th>Nome</th><th>Telefone</th><th>Email</th>");

		echo("</tr>");


		foreach($dados as $d){

			if($o == 3){

				echo("<tr>");
				$o = 0;
			}

			echo("<td>". $d. "</td>");
			$o++;
		}

		echo("</tr>");

		echo("</table>");


	
?>