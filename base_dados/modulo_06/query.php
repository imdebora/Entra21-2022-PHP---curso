<?php
require_once 'config.php';

$db = $_SESSION['db'];

// if(isset($db)) echo "Variavel foi setada";
// else echo "Não foi configurada ainda!";

$query="SELECT * FROM CIDADES";
foreach ($db->query($query) as $cidades) {
    print "<b> Cidade: </b>" . $cidades['CIDADE_NOME'] . "\n </br>";
}

$query="SELECT * FROM PESSOAS";
foreach ($db->query($query) as $pessoas){
    print "<b> Pessoa: </b>" . 
        $pessoas['PESSOA_ID'] . " - " .
        $pessoas['PESSOA_NOME'] . " - " . 
        $pessoas['PESSOA_CIDADES_ID'] .
        "<br>";
}

$query="SELECT PESSOA_NOME,CIDADE_NOME FROM PESSOAS,CIDADES" . " WHERE PESSOA_CIDADES_ID=CIDADE_ID ";

foreach ($db->query($query) as $pessoasecidades){
    print "<b> Pessoa e Cidade: </b>" . 
        $pessoasecidades['PESSOA_NOME'] . " - " . 
        $pessoasecidades['CIDADE_NOME'] . "<BR>";
}

?>