<?php
	include_once('classe.php');

	$aluno = new Aluno();

	$aluno->setNome("Laercio Souza da Silva Junior Carlos Andrade Terceiro");

	echo $aluno-> getNome();

	echo $aluno->getFone();
	echo $aluno->getEmail();
?>