<?php

$umidade = 71; // declaração de variavel numerica

// Teste para ver se vai chover ou não. Pq se a umidade for superior a 90, True, Inferior False. 
$vai_chover = ($umidade > 90 ); 

if ($vai_chover){
    echo 'Ficar em Casa, debaixo das cobertas';
}

// Também são considerados falsos em comparação a booleanas:
// - Inteiro 0
// - Ponto Flutuante 0.0 
// - String Vazia
// - arrazy vazio
// - objeto sem elementos
// - tipo null 

$var_inteiro = 'xljsdfljasçlfejçasdfj';
if ($var_inteiro){
    echo '<br> ok. entrou aqui';
}

?>