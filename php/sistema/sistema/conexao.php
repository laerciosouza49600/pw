<?php
	
	Class Conexao{

	public $con;

	function Construct(){

		try{

			$this->con = new PDO("mysql:hostname = localhost;dbname = carteira","root", " ");
		/*	$this->con = mysql_connect('localhost' , 'root' , ' ');
			mysql_select_db('carteira', $con);
		*/

		}catch(PDOException $e){

			echo ("erro". $e);
		}

		
	}

	function Conect(){

		return $this->con;
	}

	}

	$c = new Conexao();

	$c->Conect();
?>