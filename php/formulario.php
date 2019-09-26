<?php

session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['senha'] = $_POST["senha"];

?>