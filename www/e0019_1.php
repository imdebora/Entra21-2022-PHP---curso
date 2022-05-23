<?php
$a = 10;
$b = 9;
if ($a > $b){
    echo 'A é maior que B';
} else {
    echo "A não é maior que B";
}
?>

<?php
$salario = 1212;
$tempo_servico = 12;
$tem_reclamacoes = false;
if ($salario > 1000){
    if ($tempo_servico >= 12){
        if ($tem_reclamacoes != true){
            echo 'Parabéns voce sera promovido <br>';
        }
    }
}
?>