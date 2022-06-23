<?php
session_start();
require_once 'base.php';
echo $br;
if ($_GET['nome']){
    var_dump($_GET['nome']);
    echo "Apagando" . $_GET['nome'] . $br;
    $key = array_search($_GET['nome'], array_column($_SESSION['cadastro'], 'nome'));
    var_dump($key);
    if ($key){
        array_splice($_SESSION['cadastro'], ($key), 1);
    } else{
        echo "Não achou para realizar a exclusão." . $br;
    }
    echo $br . "Retornando em $time segundos...";
}

header("refresh: $time;impressao.php");
?>