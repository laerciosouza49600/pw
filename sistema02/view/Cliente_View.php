<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
   </head>
   <body>
      <h2> Sistema de Cadastro </h2>
      <fieldset>
          <legend> Dados</legend>
<?php
include("../control/Cliente_Control.php");
$cliente = new Cliente_Control();
$dados = $cliente->View();
if(@$_GET['btn']== 'btn1'){
  $nome = $_GET['nome'];
  $cpf = $_GET['cpf'];
  $cliente->Add($nome, $cpf);
}
if(@$_GET['acao']== "edit"){
  $id = $_GET['id'];
  $dadosV = $cliente->view_id($id);
  foreach ($dadosV as $d) {
    # code...
    $cpf1 = $d['cpf'];
    $nome1 = $d['nome'];
  
  }
}
if(@$_GET['acao'] == "del"){
  $id = $_GET['id'];
  $cliente->Deletar($id);
}
if(@$_GET['btn']== 'btn2'){
    echo "botao 2";
}
echo "<table class='table table-striped table-hover' border=1 align=center>";
echo "<th> Nome: </th><th> Cpf: </th><th> Editar</th><th> Deletar </th>";
echo "<tr>";
foreach($dados as $d){
    echo "<td>".$d['nome']."</td>";
    echo "<td>".$d['cpf']."</td>";
    echo "<td> <a href=?acao=edit&id=".$d['id_cliente']."> Editar </a></td>";
    echo "<td> <a href=?acao=del&id=".$d['id_cliente']."> Deletar </a></td></td>";
    echo "</tr>";
}
echo "</table>";
?>
</fieldset>
  <fieldset>
      <legend>Cadastro</legend>
    <form method="GET"> 
       
       Nome: <input type="text" name="nome" value= <?php echo @$nome1; ?>>
       CPF: <input type="text" size='10' name="cpf" value = <?php echo @$cpf1; ?>>
       <button class='btn btn-info' name="btn" value="btn1"> Cadastrar </button>
       <button class='btn btn-success' name="btn" value="btn2"> Atualizar </button>
    </form> 
  </fieldset>
  </body>
</html>
