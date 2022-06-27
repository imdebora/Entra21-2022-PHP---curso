<?php
session_start();
require_once 'conf.php';


function restaurar($tt,$b){    
    session_destroy();           
    echo "session_destroy()" .$b;
    echo "Retornando em $tt segundos ..."; 
    header("refresh: $tt ;index.php");
}
if (isset($_POST['restaurar'])) {    
    restaurar($tt,$b);    
    // $_SESSION['cadastro'] = $cadastro;
    // unset($_SESSION['alterando']);
    
} elseif (isset(($_GET['restaurar']))){
    restaurar($tt,$b);
} else {
    echo "Não restaurado" . $b ; 
}
?>