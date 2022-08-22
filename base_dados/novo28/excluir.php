<?php
require_once 'config.php';
function ExcluirPessoa(){
    
    $db = $_SESSION['db'];
    $id = $_GET['PESSOA_ID'];
    $delete = "DELETE FROM PESSOAS WHERE PESSOA_ID =" . $id;
    
    $db->query($delete);
    header("refresh: 0; index.php");}
    ExcluirPessoa();
?>
