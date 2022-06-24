<?php
session_start();
require_once 'base.php';
require_once 'config.php';
require_once 'head.php';

if(isset($_GET['ID'])){
    $_SESSION['alterar'] = $_SESSION['cadastro'][$_GET['ID']];
    require_once 'form.php';
}
if(isset($_POST['atualizar'])){
    $_SESSION['cadastro'][$_GET['ID']]['nome'] = $_POST['nome'];
    $_SESSION['cadastro'][$_GET['ID']]['idade'] = $_POST['idade'];
    $_SESSION['cadastro'][$_GET['ID']]['cep'] = $_POST['cep'];

    unset($_SESSION['alterar']);
    
    header("refresh: $time;index.php");
}
