<?php
	
	include_once("aluno.php");

	class turma{

		public $codigo;
		public $sala;

		function Turma(){

			$this->codigo = "5522";
			$this->sala = "L2";
		}

		function incluirAluno($aluno){

			echo ("aluno incluido");


		}

		
	}
		

		$aluno = new Aluno("LAERCIO", "201611");

		$incluir = new Turma();

		$incluir->incluirAluno($aluno);



		// print_r($aluno);

		/*
		$aluno->setNome("laercio");
		$aluno->setMatricula("20161timin");

		echo $aluno->getNome();
		echo "</br>";
		echo $aluno->getMatricula();
		*/


		


?>