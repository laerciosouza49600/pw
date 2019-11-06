<?php
 session_start();

    $numero = $_POST["numero"];
    $operadora = $_POST["operadora"];
    $recarga = $_POST["recarga"];
  
    
    if (isset($operadora)) { 
        $_SESSION["numero"] = $numero;
    if($operadora == 1){
        $resut = $recarga / ($operadora * $operadora) * 100;
        $_SESSION['tim'] = $resut;
        header("Location: ../index.php");
    }else if($operadora == 2){
        $resut = $recarga / ($operadora * $operadora) * 100;
        $_SESSION['claro'] = $resut;
        header("Location: ../index.php");
    }else if($operadora == 3){
        $resut = $recarga / ($operadora * $operadora) * 100;
        $_SESSION['oi'] = $resut;
        header("Location: ../index.php");
    }else if($operadora == 4){
        $resut = $recarga / ($operadora * $operadora) * 100;
        $_SESSION['vivo'] = $resut;
        header("Location: ../index.php");
    }
    }else{
        header("Location: ../index.php");
    }
