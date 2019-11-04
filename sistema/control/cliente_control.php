<?php

	include("../model/cliente_model.php");
	include("../sistema/conexao.php");
	
	Class Cliente_Control{
			public $nome;
			public $cpf;
			public $dados;
			public $conn;

		function Construct(){

			$this->dados = new Cliente_Model();
			$this->conn = new Conexao();
			#this->dados->setNome($nome);

		}

			

		function View(){

			$sql = " SELECT * from cliente";
			$d = $this->conn->Conect();
			$dados = $d->prepare($sql);
			$dados->execute();

			return $dados; 
		}

		function Add($nome,$cpf){
			// :nome -> vai mandar um padrão do banco

			$sql = "INSERT INTO cliente (nome,cpf) values (:nome, :cpf)";
			$d = $this->conn->Conect();
			$dados = $d->prepare($sql);
			$dados->bindValue(":nome", $nome);
			$dados->bindValue(":cpf", $cpf);
			$dados->execute();
		}
	}
?>