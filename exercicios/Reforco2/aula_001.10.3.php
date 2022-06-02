<?php
$a = 0;
while ($a <= 5){
    include_once 'tootls.php'; //gera warning se não encontrar o arquivo
    echo "<br> Quadrado de 2 é: " . quadrado(2);
    $a++;
}
?>