<?php

session_start();

//session_destroy(); destroi as variáveis com sessão

$_SESSION['nome'] = 'admin';

//isset pergunta se tem algo dentro da sessão

//header("Location:cont2.php");

if(isset($_SESSION['nome'])){


?>

<a href = "cont2.php"> voltar a cont php </a>

<br>

<p> Página com usuário
    <?php echo $_SESSION['nome']; ?> Logado

</p>

<?php
}else{

    echo "sem usuario logado";
}


/* $a = 1;

if($a == 1){

    header("Location:cont2.php");
}

?>

<a href = "cont2.php"> Avançar a página </a>

</form

*/