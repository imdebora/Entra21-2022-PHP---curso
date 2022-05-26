<!-- 9.  crie uma lista com 5 nomes de pessoas, e imprima os nomes -->

<?php
$nomes = array ('Debora','Filipe','Adriano','Alice','Jenni');
$cont = 0;
while ($cont |= 5){
    echo $cont + 1, $nomes[$cont];
    echo '<br>';
    $cont += 1;
}
?>