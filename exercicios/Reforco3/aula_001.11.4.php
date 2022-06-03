<!-- Passagem de Parametros -->

<!-- FUNÇÃO
 2 tipos diferentes de passagem ; 
    by value (por valor)
    by reference (por referencia)

Quando eu passo um valor dentro função  -- a função recebe como variavel interna (não altera o original)   -->

<?php
function incrementa($variavel, $valor){
    $variavel += $valor;
}

$a = 10;
incrementa($a,20);
echo $a . "<br>";

// Resultado = 10
?>
<?php
function incrementa2(&$variavel, $valor){
    $variavel += $valor;
}

$a = 10;
incrementa2($a,20);
echo $a . "<br>";
// Passar na aula o valor desse $a
?>

<?php
// PASSAGEM DE PARAMETROS COM VALOR DEFAULT (OU PADRÃO)
function incrementa3(&$variavel, $valor=40){
    $variavel += $valor;
}

$a = 10;
incrementa3($a);
echo $a;
// Resultado será 50
?>

