<!-- FOR

ESTRUTURA DE CONTROLE QUE ESTABELECE UM LAÇO DE REPETIÇÃO BASEADO EM UM CONTROLE -->

<!-- for(expre1, expre2, expre3){
    ..
    ..
}

expre1 = Valor inicial da variavel contradora (de:)
expre2 = Condição de execução. (verdadeiro) (ate)
expre3 = Valor a ser incrementado (passo:) --> -->

<?php
for ($i=1;$i<=10;$i++){
    print $i;
}
?>

<?php
for ($i=1;$i<=10;$i++){
    for ($j=1;$j<=5;$j++){
        print "<br> I: $i, J:$j";
    }
}
?>
