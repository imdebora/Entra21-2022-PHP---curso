<!-- 20. Crie um programa que le um valor de inicio e um valor de fim, exibindo em tela a contagem dos numeros dentro desse intervalo. -->


<?php
$vetor = array(5,6,7,8,9,10);
$count = 2; 
for ($count; $count < count($vetor); $count++){
    print $vetor[$count-1]. "<br>";
}
?>
