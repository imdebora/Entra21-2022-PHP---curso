<!-- FUNÇÃO É UM PEDAÇO DE CÓDIGO
OBJETIVO ESPECIFICO
ENCAPSULADO
RETORNA UM DADO CONFORME OS PARAMETROS ENVIADOS -->

<!-- Reutilização de código -->


<!-- parametros tem função de receber (argumentos) separados por virgula (,) 

function nome_da_funcao(lista de argumentos ou chamamos de parametros){
    ... codigo ...
    ... codigo ...
    return (integer, string, array, objeto, etc..)
}
-->

<?php
    function soma($arg1, $arg2, $arg3, $arg4){
        $valor = $arg1 + $arg2 + $arg3 + $arg4;
        return $valor;
    }
    function imc($peso, $altura){
        return $peso / ($altura * $altura);
    }

    echo "O indice de massa corporal é: " . imc(75,1.68);
?>