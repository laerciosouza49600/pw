<?php
	
	// .. volta um diretório

	include_once('../model/libromodel.php');

	class livro_Control{

		public $livro;

	function construct(){

		$this->livro = new libromodel();
	}

	function addLivro($livro){

		$this->livro->setNome($livro);

		//$libro é um objeto e está herdando os metodos da outra classe libromodel

	}

	function mostrarLivro(){

		return $this->livro->getNome();
	}

	}
?>