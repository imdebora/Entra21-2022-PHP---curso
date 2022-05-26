<!-- 19. Crie uma lista com 8 elementos de meio de uma lista de compras de supermercado, por um laço de repetição for, liste individualmente cada um dos itens dessa lista.  -->

<?php
$vetor = array('Leite','Refrigerante','Detergente','Sabão','Açucar','Carne','Arroz','Feijão');
$count = 1; 
for ($count; $count <= count($vetor); $count++){
    print $count.' - '.$vetor[$count-1]. "<br>";
}