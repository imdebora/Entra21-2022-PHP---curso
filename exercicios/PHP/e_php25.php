<!-- 25. Crie um programa que realiza a contagem de 1 a 100, usando apenas números impares ao final do processo exiba em tela quantos números impares foram encontrados nesse intervalo, assim como a soma dos mesmos: -->

<?php
$total=null;
$soma=null;
for ($x = 1; $x <= 100; $x++) {
    if ($x % 2 == 1) {
        echo "$x <br>";
        $total++;
        $soma+=$x;
    }
}
echo "<br /> O total de números ímpares foi de $total e a sua soma foi de $soma";
?>