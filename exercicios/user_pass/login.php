<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['entrar'])){
    var_dump($dados);

}
?>