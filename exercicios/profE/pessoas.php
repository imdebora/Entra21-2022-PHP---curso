<?php
$br = '<br>';

$cadastro = array(
    1 => array(
        "nome" => "Bruno"
    ),
    2 => array(
        "nome" => "Marli"
    ),
    3 => array(
        "nome" => "Claudio"
    ),
    4 => array(
        "nome" => "Matheus"
    ),
    5 => array(
        "nome" => "Thiago"
    )
);

if ( !$_SESSION['cadastro']){
    $_SESSION['cadastro'] = $cadastro;
}