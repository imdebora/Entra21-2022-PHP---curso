<?php
// key (chave) => value(valor)
// Imprimir de forma organizada (=== ++++ /// )
// Cabecalho: 
// Itens:

$sacola1 = array('item1' => 'pera', 'item2' => 'banana', 'item3' => 'cafe', 'item4' => 'cebola');
$sacola2 = array('item1' => 'matambre', 'item2' => 'parmesao', 'item3' => 'mussa', 'item4' => 'temperos');
$sacola3 = array('item1' => 'carvao', 'item2' => 'sal', 'item3' => 'oliva', 'item4' => 'cheiroverde');
$sacola4 = array('item1' => 'vodka', 'item2' => 'gelo', 'item3' => 'limao', 'item4' => 'cravo');
$br = "<br><br>";
$caixa1 = array(1 => $sacola1);
$caixa2 = array(2 => $sacola2, 2 => $sacola3, 3 => $sacola4);
$carro = array('malas' => $caixa1, 'banco' => $caixa2);
echo "===========<br>COMPRAS<br>===========<br>" ;

foreach ($carro as $x){
    // echo "<br> Chave: $x";
    foreach ($x as $itens ){
        foreach($itens as $churras){
        echo $churras . $br;
        }
    }
}
?>