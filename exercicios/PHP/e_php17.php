<!-- 17. Crie uma variável com valor inicial 0, enquanto o valor dessa variável for igual ou menor que 10, exiba em tela o proprio valor da variavel. A Cada execução a mesma deve ter seu valor atualizado, incrementado em 1 unidade.  -->

<?php
$val = 1;
while ($val <= 10):
    echo $val. "<br>";
    $val++;
endwhile;
?>