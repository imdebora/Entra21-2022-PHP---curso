<?php
session_start();
require_once 'config.php';
// require_once 'base.php';
echo $br;
if ($_GET['Delete']){
    var_dump($_GET['nome']);
    echo "Apagando" . $_GET['nome'] . $br;
    $key = "PESSOA_ID";
    if ($key >=0){
        "DELETE FROM PESSOAS WHERE PESSOA_ID = $key";
    } else{
        echo "Não achou para realizar a exclusão." . $br;
    }
    echo $br . "Retornando em $time segundos...";
}

header("refresh: 10;index.php");
?>