<?php
  
  Class Cliente_Model{
    public $id;
    public $nome;
    public $cpf;
    public $fone;
    function __construct()
    {
        $this->id = 0;
        $this->nome = "sem nome";       
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
     return $this->nome;
    }
    function setCpf($cpf){
        $this->cpf= $cpf;
    }
    function getCpf(){
     return $this->cpf;
    }
    





  }
 
