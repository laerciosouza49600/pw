<?php
	
	echo("<h1 align = 'center'> Sistema de votação - IFPI". "</h1>");

?>

<h3 align = "lefts"> Qual candidato você escolhe para presidente do grêmio estudantil? </h3>

<table width = "90%" height = "40%" align = 'center'>

	<tr>

		<td> <img src = "imagens/darth.jpg"> Darth vader - Candidato 01</td>
		<td> <img src = "imagens/homer.png"> Homer Simpson - Candidato 02</td>

	</tr>

</table>

<form action = "recu.php" method = "POST" align = "center">

	<input type = "radio" name = "votacao" value = "darth"> Darth
	<input type = "radio" name = "votacao" value = "homer"> Homer
	<input type = "radio" name = "votacao" value = "branco"> Branco
	<input type = "radio" name = "votacao" value = "nulo"> Nulo </br>
	<button type = "submit"> votar </button>
</form>

<fieldset align = "center">

	<legend> Resultado parcial </legend>

<?php

	$qt_votos = 0;
	$votos_darth = 0;
	$votos_homer = 0;
	$nulos = 0;
	$brancos = 0;

	if($_POST['votacao'] == "darth"){

		$votos_darth ++;

		$barra_darth = ($votos_darth+$votos_homer+$nulos+$brancos)/$votos_darth * 100;

		$qt_votos++;

	}else if($_POST['votacao'] == "homer"){

		$votos_homer++;

		$barra_homer = ($votos_darth+$votos_homer+$nulos+$brancos)/$votos_homer * 100;

		$qt_votos++;

	}else if($_POST['votacao'] == "branco"){

		$brancos ++;

		$barra_branca = ($votos_darth+$votos_homer+$nulos+$brancos)/$brancos * 100;

	}else if ($_POST['votacao'] == "nulo"){

		$nulos ++;

		$barra_nula = ($votos_darth+$votos_homer+$nulos+$brancos)/$nulos * 100;
	}
?>

<h3 align = "left"> candidato 01</h3>
	
	<hr color = "blue" width = <?php $barra_darth; ?>/>

<h3 align = "left"> candidato 02 </h3>

	<hr color = "red" width = <?php $barra_homer; ?> />

<h3 align = "left"> branco</h3>
	
	<hr color = "grey" width = <?php $barra_branca; ?> />

<h3 align = "left"> nulo</h3>
	
	<hr color = "orange" width = <?php $nulo; ?> />

</fieldset>