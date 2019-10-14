<?php

	Class Aluno{

		private $nome;
		public $email;
		public $fone;

		function construct(){

			$this->nome = "Sem nome";
			$this->email = "sem email"; // " ";
			$this->fone = "sem fone"; // = null
		}

		function setNome($nome){ //pode ser n, ou diferente de nome

			$this->nome = $nome;


		}

		function getNome(){

			return $this->nome; // echo impressão, não imprimir use return
		}

		function getEmail(){

			return $this->email;
		}
		function setEmail($email){

			$this->email = $email;
		}

		function getFone(){
			return $this->fone;
		}
	}