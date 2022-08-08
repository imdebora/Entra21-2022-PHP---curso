<?php
require_once 'config.php';

function AdicionarPessoa($PESSOA_NOME,$PESSOA_IDADE,$PESSOA_CEP) {
    $db = $_SESSION['db'];
    $sql = 'INSERT INTO PESSOAS(PESSOA_NOME,PESSOA_IDADE,PESSOA_CEP)' . 
        'VALUES(:PESSOA_NOME,:PESSOA_IDADE,:PESSOA_CEP)';

    $tmp = $db->prepare($sql); 
    $tmp->execute([
        ':PESSOA_NOME' => $PESSOA_NOME,
        ':PESSOA_IDADE' => $PESSOA_IDADE,
        ':PESSOA_CEP' => $PESSOA_CEP,
    ]);
}
if(isset($_POST['adicionar'])){
    $PESSOA_NOME = $_POST['nome'];
    $PESSOA_IDADE = $_POST['idade'];
    $PESSOA_CEP = $_POST['cep'];

    $novo_cadastro = AdicionarPessoa($_POST['nome'],$_POST['idade'],$_POST['cep']);

    // return $db->lastInsertId() ;

}

if(isset($_POST['restaura'])){
    $_SESSION['db'] = $db;

}
?>