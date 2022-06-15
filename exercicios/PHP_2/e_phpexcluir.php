<?php
session_start(); 
if(!isset($_GET['apagar'])) { 
    array_splice($_SESSION['cadastro'], $_GET['apagar'], 1); 
    echo "APAGANDO.... x _ x";
    header("refresh: 1 ;e_php29.php"); 
} 
?>