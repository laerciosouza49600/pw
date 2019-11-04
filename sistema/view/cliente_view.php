<html>
	
	<head>

		<link rel = "stylesheet" type = "text/css" href = "../lib/bootstrap.css">

	</head>

<?php
	
	include("../control/cliente_control.php");

	$cliente = new Cliente_Control();
	$dados = $cliente->View();
	if(@$_GET['btn'] == 'btn1'){
		$cliente->Cadastrar();
	}

	if(@$_GET['btn'] == 'btn2'){
		echo "botao 2";
	}
	echo "<table class = 'table table-stripped table-hover' border = 1 align = center>";
	echo "<th> Nome> </th> <th> Cpf: </th> <th> Editar </th> <th> Deletar </th>";
	echo "<tr>";


	foreach ($dados as $d) {

		echo "<td>".$d['nome']. "</td>";
		echo "<td>".$d['cpf']. "</td>";
		echo "<td> <a href = ?acao=edit&id = ".$d['id']."> Editar </a> </td>";
		echo "<td> <a href = ?acao=del&id = ".$d['id']."> Deletar </a> </td>";
		echo "</tr>";
		# code...
	}

	echo "</table>";
?>
	<form method = "GET">
		Nome: <input type = "text" name = "nome">
		CPF: <input type = "number" name = "cpf" size = '10'>
		<button class = 'btn btn-info 'name = "btn" value = "btn1"> Cadastrar </button>
		<button name = 'btn btn-sucess' value = "btn2"> Atualizar </button>

	</form>