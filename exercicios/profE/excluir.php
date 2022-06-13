<?php
session_start();
require_once "pessoas.php";
$b = '<br>';
if ($_GET['Delete']) {
    echo "Apagando " . $_GET['Delete'] . " -> ". $_GET['Nome'] . $b . $b;
    array_splice($_SESSION['cadastro'], $_GET['Delete'], 1);
    echo "a chave : " . $_GET['Delete'] . " Nome: " . $_GET['Nome'] . " foi excluida" . $b;
    echo $b . "Retornando em 3 segundos ...";
    header("refresh: 3;index.php");
}
?>