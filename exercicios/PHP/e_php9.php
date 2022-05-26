<!-- 9.  crie uma lista com 5 nomes de pessoas, e imprima os nomes -->

<?php
$nomes = array ('Debora', 'Filipe', 'Adriano', 'Alice', 'Jenni');

echo "Os 5 nomes da lista são: <br>";

foreach ($nomes as $nome){
    echo $nome,"<br>";
}
?>