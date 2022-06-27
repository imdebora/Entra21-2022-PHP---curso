<?php
session_start();
require_once 'base.php';
require_once 'conf.php' ;

// if (isset($_POST['restaurar'])) {    
//     $_SESSION['cadastro'] = $cadastro;
//     unset($_SESSION['alterando']);
//     echo "Base de Dados Restaurando..." ; 
//     echo "Retornando em $tt segundos ..."; 
//     header("refresh: $tt ;index.php");
// }
if (isset($_POST['cancelar_alt'])) {
    unset($_SESSION['alterando']);    
    echo "Retornando em $tt segundos ..."; 
    header("refresh: ($tt/3) ;index.php");
}

?>