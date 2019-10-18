<h2 align = "center"> Agenda em PHP </h2>;

<form name = form1 method = "POST" action = "arquivo_dois.php">

    Nome: <input type = "text" name = "nome"> </br>
    Telefone: <input type = "text" name = "telefone"> </br>
    Email: <input type="text" name="email"> </br>
    <button type = "submit"> salvar </button>

</form>

<?php


//a abre e apaga, w apaga abre e escreve no final, r apenas lê
//write escrever
//fopen cria o arquivo

$file = fopen("arquivo.txt", 'w');
$file1 = fopen("arquivo.txt", 'r');

// fwrite($file, "ifpi 2019 <br/> \n");
 fwrite($file, "$nome | $email | $ano | \n");

$texto = fread($file1,4096);
$dados = explode('|', $texto);

//echo $texto;
$c = 0;
array_pop($dados);
echo "<table border = '1'align = 'center'>";
 echo "<th>Nome</th><th>Telefone</th><th>Email</th>";    
    foreach($dados as $d){
        if($c == 3){
            echo "<tr>";
            $c = 0;
    }
    echo("<td>". $d."</td>");
    $c++;
}
// cria um vetor
//não pode abrir com w! << fread

//filesise($file1)

?>

