<?php
function ExcluirPessoa(){
    require_once 'config.php';
    $db = $_SESSION['db'];
    $id = $_GET['ID'];
    $delete = "DELETE FROM PESSOAS WHERE PESSOA_ID = $id";
    $db->query($delete);
    header("refresh: 0; index.php");}
    ExcluirPessoa();
?>