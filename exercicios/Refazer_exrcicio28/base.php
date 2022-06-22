<?php
$cadastro = array(
    "1" => array("nome" => "Marli", "idade" => "30", "cep" => "88780-123"),
    "2" => array("nome" => "Bruno", "idade" => "27", "cep" => "88702-456"),
    "3" => array("nome" => "Matheus", "idade" => "25", "cep" => "88780-789"),
    "4" => array("nome" => "Claudio", "idade" => "35", "cep" => "88702-123"),
    "5" => array("nome" => "Thiago", "idade" => "23", "cep" => "88780-456")

);
if(!$_SESSION['cadastro']){
    $_SESSION['cadastro'] = $cadastro;
}
?>