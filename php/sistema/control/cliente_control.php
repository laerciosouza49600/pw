<?php

	include("../model/cliente_model.php");
	include("../sistema/conexao.php");
	
	Class Cliente_Control{

			public $dados;
			public $conn;

		function Construct(){

			$this->dados = new Cliente_Model();
			$this->conn = new Conexao();

		}

		function View(){

			$sql = " SELECT * from cliente";
			$d = $this->conn->Conect();
			$dados = $d->prepare($sql);
			$dados->execute();

			return $d;
		}
	}
?>