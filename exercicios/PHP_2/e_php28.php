<?php
$br = '<br>';

$cadastro = array(
    1 => array(
        "nome" => "Marli",
        "idade" => "30",
        "cep" => "123"
    ),
    2 => array(
        "nome" => "Bruno",
        "idade" => "26",
        "cep" => "456"
    ),
    3 => array(
        "nome" => "Claudio",
        "idade" => "32",
        "cep" => "789"
    ),
    4 => array(
        "nome" => "Matheus",
        "idade" => "25",
        "cep" => "987"
    ),
    5 => array(
        "nome" => "Thiago",
        "idade" => "23",
        "cep" => "654"
    )
);

if ( !$_SESSION['cadastro']){
    $_SESSION['cadastro'] = $cadastro;
}
?>
