<?php
// $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
session_start();
require_once 'conf.php';

$login=$_POST["login"];

$pass=$_POST["senha"];

if (($login == $usuario) && ($pass == $senha)){

echo '<script>window.location="user.php";</script>';

}else {

echo '<header><h1>Usuario ou Senha invalido!</h1></header>';

}

?>