<?php
if(isset($_POST['adicionar'])){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];

    $novo_cadastro = array(
        "nome" => $_POST['nome'],
        "idade" => $idade,
        "cep" => $cep
    );

    array_push($_SESSION['cadastro'], $novo_cadastro);
}
if(isset($_POST['restaura'])){
    $_SESSION['cadastro'] = $cadastro;
}
?>