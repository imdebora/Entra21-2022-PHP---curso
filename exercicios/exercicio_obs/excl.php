<?php
session_start();
require_once 'conf.php';
require_once 'base.php';
require_once 'entr.php';
$id = $_GET['Id'];
if (isset($id)) {      
     if ($_SESSION['cadastro'][$id]) { 
          echo "Apagando " . $id . ":" . $_GET['titulo'] . $b;              
          unset($_SESSION['cadastro'][$id]);         
     } else {
          echo "ID não encontrado" . $b ; 
     }

     echo $br . "Retornando em $tt segundos ..."; 
     header("refresh: $tt ;index.php");
} else { 
     echo $b . "Chamando sem Id impossivel fazer algo!"; 
}

?>