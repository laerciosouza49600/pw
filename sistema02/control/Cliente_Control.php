<?php
  include("../model/Cliente_Model.php");
  include("../bd/Conexao.php");
  Class Cliente_Control{  
    public $dados;
    public $conn;
    function __construct()
    {
        $this->dados = new Cliente_Model();
        $this->conn = new Conexao();            
    }
    function View(){
      $sql = "SELECT * FROM Cliente";
      $d = $this->conn->Conect();
      $dados=$d->prepare($sql);
      $dados->execute();
      return $dados;
    }
    function Add($nome, $cpf){  
      $this->dados->setNome($nome);
      $this->dados->setCpf($cpf);
      $sql = "INSERT INTO  Cliente (nome, cpf) values (:nome,:cpf)";
      $d = $this->conn->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":nome", $this->dados->getNome());
      $dados->bindValue(":cpf",$this->dados->getCpf());
      $dados->execute();     
      header("Location: ../view/Cliente_View.php");
    }
    function Deletar($id){
      $sql = "DELETE FROM Cliente WHERE id = :id";
      $d = $this->conn->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":id", $id);
      $dados->execute();
      header("Location: ../view/Cliente_View.php");
    }
  }