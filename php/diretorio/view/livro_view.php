<?php

	include_once('../control/livro_control.php');

	/* class livro_view{

		public $livro;

	function construct(){

		$this->livro = new livro_Control();
	}

	function addLivro($livro){

		$this->livro->addLivro($livro);
	}

	function Mostrar(){

	}

	}

	*/
	$livro = new livro_Control();

	if(isset($_POST['livro'])){

		$l = $_POST['livro'];
		$livro->addLivro($l);

		echo $livro->mostrarLivro();
}
	
?>

<form method = 'POST'>

	Livro: <input type = "text" name = "livro">

	<button type = "submit"> Enviar </button>
</form>



