<html>
	
	<head>

		<link rel = "stylesheet" type = "text/css" href = "../lib/bootstrap.css">

	</head>

<?php
	
	include("../control/cliente_control.php");

	$cliente = new Cliente_Control();
	$dados = $cliente->view();


	foreach ($dados as $d) {

		echo "Nome: ". $d['nome'];
		echo "cpf: ". $d['cpf'];
		# code...
	}
?>