<?php
function AtualizarPessoa($PESSOA_NOME, $PESSOA_IDADE,$PESSOA_CEP, $PESSOA_SALDO){
    $db = $_SESSION['db'];
    $id = $_GET['ID'];
    $update = "UPDATE PESSOAS
    SET PESSOA_NOME = '$PESSOA_NOME', PESSOA_IDADE = '$PESSOA_IDADE', PESSOA_CEP = '$PESSOA_CEP', PESSOA_SALDO = '$PESSOA_SALDO'
    WHERE PESSOA_ID = $id";
    $db->query($update);}
?>