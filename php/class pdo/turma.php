<?php
	
	include_once("aluno.php");

	class turma{

		public $codigo;
		public $sala;

		function Turma(){

			$this->codigo = "5522";
			$this->sala = "L2";
		}

		function getCodigo(){

			return $this->codigo;
		}

		function incluirAluno($aluno){

			echo("Aluno incluido");

		}

		function estaAberta($cod){

			if($cod == $this->codigo){

				echo ("Turma aberta");

			}else{

				echo ("Turma fechada");
			}
		}

		
	}

		$aluno = new Aluno("LAERCIO", "201611");

		$incluir = new Turma();

		$incluir->incluirAluno($aluno);

		echo ("</br>");

		$codigo ="5522";

		$incluir->estaAberta($codigo);





		// print_r($aluno);

		/*
		$aluno->setNome("laercio");
		$aluno->setMatricula("20161timin");

		echo $aluno->getNome();
		echo "</br>";
		echo $aluno->getMatricula();
		*/


		


?>