<?php
	
	Class Conexao{

	public $con;

	function Construt(){

		try{
			$this->con = new PDO("mysql:hostname=localhost;dbname=siscarteira;","root","");
		}catch(PDOException $s){
			echo "algo errado com a coxexão".$s;
		}
	}

	function Conectar(){

		return $this->con;
	}
}

	$teste = new Conexao();
	$teste->Conectar();

?>