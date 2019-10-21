<?php
	
	class Aluno{

		public $nome;
		public $matricula;

		function Aluno($nome, $matricula){

			$this->nome = $nome;
			$this->matricula = $matricula;

		//	echo("Aluno"." ". $nome." ". "matricula"." " .$matricula);
		}

		function setNome($nome){

			$this->nome = $nome;
		}

		function getNome(){

			return $this->nome;
		}

		function setMatricula($matricula){

			$this->matricula = $matricula;
		}

		function getMatricula(){

			return $this->matricula;
		}
	}

?>