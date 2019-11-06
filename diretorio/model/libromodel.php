<?php
	
	class livro_Model{

		public $nome;
		public $ano;

		function contruct(){

			$this->nome = "Sem livro";
			$this->ano = "2000";

		}

		function setNome($nome){

			$this->nome = $nome;

		}

		function getNome(){

			return $this->nome;

		}

		function setAno($ano){

			$this->ano = $ano;

		}

		function getAno(){

			return $this->ano;

		}

	}

?>