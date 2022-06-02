<!-- require_one -->
<?php
$a = 0;
while ($a <= 5){
    require_once 'tootls.php'; //gera MORTE do script . ...se não encontrar o arquivo
    echo "<br> Quadrado de 2 é: " . quadrado(2);
    $a++;
}
?>