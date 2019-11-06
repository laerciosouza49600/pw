<?php
Class Conexao{
    public $con;
    function __construct()
    {
     try{
$this->con = new PDO("mysql:hostname=localhost;dbname=carteira;","root","");
      }catch(PDOException $e){
       echo "Erro ".$e;
     } 

    }

    function Conect(){
        return $this->con;
    }

}
    
    $conexao = new Conexao();
    $conexao->Conect();


?>