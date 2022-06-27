<?php
session_start();
require_once 'base.php';
require_once 'conf.php';
require_once 'cabe.php';

if (isset($_GET['Id'])) {
    $_SESSION['alterando']  = $_SESSION['cadastro'][$_GET['Id']];
    require_once 'entr.php';    
}


if (isset($_POST['atualizar_dados'])){
    
    $_SESSION['cadastro'][$_GET['Id']]['titulo'] = $_POST['titulo'];
    $_SESSION['cadastro'][$_GET['Id']]['url'] = $_POST['url'];
    $_SESSION['cadastro'][$_GET['Id']]['frame'] = $_POST['frame'];

    unset($_SESSION['alterando']);            
    header("refresh: $tt;index.php");
}
if (isset($_POST['cancelar_alt'])) {
    unset($_SESSION['alterando']);    
    
    header("refresh: 0 ;index.php");
}


?>