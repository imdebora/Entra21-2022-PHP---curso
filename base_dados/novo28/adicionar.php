<?php
require_once 'config.php';

function AdicionarPessoa($PESSOA_NOME,$PESSOA_IDADE,$PESSOA_CEP,$PESSOA_SALDO) {
    $db = $_SESSION['db'];
    $sql = 'INSERT INTO PESSOAS(PESSOA_NOME,PESSOA_IDADE,PESSOA_CEP,PESSOA_SALDO)' . 
        'VALUES(:PESSOA_NOME,:PESSOA_IDADE,:PESSOA_CEP,:PESSOA_SALDO)';

    $tmp = $db->prepare($sql); 
    $tmp->execute([
        ':PESSOA_NOME' => $PESSOA_NOME,
        ':PESSOA_IDADE' => $PESSOA_IDADE,
        ':PESSOA_CEP' => $PESSOA_CEP,
        ':PESSOA_SALDO' => $PESSOA_SALDO,
        
    ]);
}
if(isset($_POST['adicionar'])){
    $PESSOA_NOME = $_POST['nome'];
    $PESSOA_IDADE = $_POST['idade'];
    $PESSOA_CEP = $_POST['cep'];
    $PESSOA_SALDO = $_POST['saldo'];

    $novo_cadastro = AdicionarPessoa($_POST['nome'],$_POST['idade'],$_POST['cep'],$_POST['saldo']);

    return $db->lastInsertId() ;

}

if(isset($_POST['restaura'])){
    $_SESSION['db'] = $db;
}
?>