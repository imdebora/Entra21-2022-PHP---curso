<?php
$salario = 1010;
$tempo_servico = 12;
$tem_reclamacoes = false;
if($salario > 1000){
    if($tempo_servico >= 12){
        if($tem_reclamacoes != true){
        echo "parabens voce foi promovido!";
        }
    }
}

if (($salario > 100) and ($tempo_servico >= 12) and ($tem_reclamacoes != true)){
    echo "parabens voce foi promovido!";
}
?>