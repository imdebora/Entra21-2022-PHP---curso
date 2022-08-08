<?php
require_once 'config.php';
// $db = $_SESSION['db'];
// if(isset($db)) echo "set";
// else echo "no set";

function InserirPessoa($PESSOA_NOME,$PESSOA_IDADE,$PESSOA_CIDADES_ID) {
    print "Entrou";
    $db = $_SESSION['db'];
    $sql = 'INSERT INTO PESSOAS(PESSOA_NOME,PESSOA_IDADE,PESSOA_CIDADES_ID)' . 
        'VALUES(:PESSOA_NOME,:PESSOA_IDADE,:PESSOA_CIDADES_ID)';
    
    $tmp = $db->prepare($sql);
    $tmp->execute([
        ':PESSOA_NOME' => $PESSOA_NOME,
        ':PESSOA_IDADE' => $PESSOA_IDADE,
        ':PESSOA_CIDADES_ID' => $PESSOA_CIDADES_ID,
    ]);

    return $db->lastInsertId() ;
}

$novoID = InserirPessoa('Apolonia',67,3);
print "<b><br> $novoID </b></br>";
$novoID = InserirPessoa('Valdineia',44,1);
print "<b><br> $novoID </b></br>";

unset($db);
unset($_SESSION['db']);

?>